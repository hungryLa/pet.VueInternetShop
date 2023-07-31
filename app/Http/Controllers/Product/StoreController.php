<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\ColorProduct;
use App\Models\File;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();

            $tagsIds = $data['tags'];
            $colorsIds = $data['colors'];
            $images = $data['images'];

            unset($data['tags'],$data['colors'],$data['images']);

            $product = Product::firstOrCreate([
                'title' => $data['title']
            ], $data);

            foreach ($images as $image){
                $currentImages = count($product->images);
                if($currentImages <= Product::MAX_FILES['images']){
                    $path_file = Storage::disk('public')->put('products/images',$image);
                    File::create([
                        'model_type' => Product::TYPE,
                        'model_id' => $product->id,
                        'file_type' => File::TYPES_FILE['image'],
                        'file_path' => $path_file,
                    ]);
                }
            }

            foreach ($tagsIds as $tagsId) {
                ProductTag::firstOrCreate([
                    'product_id' => $product->id,
                    'tag_id' => $tagsId
                ]);
            }

            foreach ($colorsIds as $colorsId) {
                ColorProduct::firstOrCreate([
                    'color_id' => $colorsId,
                    'product_id' => $product->id,
                ]);
            }

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('product.index');
    }
}

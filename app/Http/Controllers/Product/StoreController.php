<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\ColorProduct;
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

            $data['preview_image'] = Storage::disk('public')->put('products/images',$data['preview_image']);

            $tagsIds = $data['tags'];
            $colorsIds = $data['colors'];
            unset($data['tags'],$data['colors']);

            $product = Product::firstOrCreate([
                'title' => $data['title']
            ], $data);

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

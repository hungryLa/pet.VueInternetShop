<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Product $product)
    {
        try {

            $data = $request->validated();

            if($request->preview_image){
                if($product->preview_image != null){
                    Storage::disk('public')->delete($product->preview_image);
                }
                $data['preview_image'] = Storage::disk('public')->put('products/images',$data['preview_image']);
            }

            $tagsIds = $data['tags'];
            $colorsIds = $data['colors'];
            unset($data['tags'],$data['colors']);

            $product->update($data);

            foreach ($product->tags as $tag){
                ProductTag::where([
                    'product_id' => $product->id,
                    'tag_id' => $tag->id
                ])->delete();
            }
            foreach ($tagsIds as $tagsId) {
                ProductTag::firstOrCreate([
                    'product_id' => $product->id,
                    'tag_id' => $tagsId
                ]);
            }

            foreach ($product->colors as $color){
                ColorProduct::where([
                    'product_id' => $product->id,
                    'color_id' => $color->id
                ])->delete();
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

        return redirect()->route('product.show',compact('product'));
    }
}

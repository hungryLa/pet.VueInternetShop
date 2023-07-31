<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        try {
            $product->tags()->delete();
            $product->colors()->delete();

            if(count($product->images) != 0){
                foreach ($product->images as $image){
                    Storage::disk('public')->delete($image->file_path);
                }
                $product->images()->delete();
            }

            $product->delete();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('product.index');
    }
}

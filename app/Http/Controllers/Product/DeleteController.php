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

            if($product->preview_image != null){
                Storage::disk('public')->delete($product->preview_image);
            }

            $product->delete();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('product.index');
    }
}

<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        $tags = $product->tags()->orderBy('title')->get();
        $colors = $product->colors()->orderBy('title')->get();

        return view('product.show',compact('product','tags','colors'));
    }
}

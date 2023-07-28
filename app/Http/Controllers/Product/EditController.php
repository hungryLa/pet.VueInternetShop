<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        $categories = Category::orderBy('title')->get();
        $tags = Tag::orderBy('title')->get();
        $colors = Color::orderBy('title')->get();
        return view('product.edit',
            compact('product','categories','tags','colors'));
    }
}

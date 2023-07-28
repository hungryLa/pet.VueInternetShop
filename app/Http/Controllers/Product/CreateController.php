<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $categories = Category::orderBy('title')->get();
        $tags = Tag::orderBy('title')->get();
        $colors = Color::orderBy('title')->get();
        return view('product.create',
            compact('categories','tags','colors'));
    }
}

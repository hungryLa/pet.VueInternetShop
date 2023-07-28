<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\IndexProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $products = IndexProductResource::collection(Product::all());
        return $products;
    }
}

<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category)
    {
        try {

            $category->delete();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('category.index');
    }
}

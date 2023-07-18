<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Category $category)
    {
        try {

            $data = $request->validated();
            $category->update($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return view('category.show',compact('category'));
    }
}

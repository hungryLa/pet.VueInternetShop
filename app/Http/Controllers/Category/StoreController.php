<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            Category::firstOrCreate($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        return redirect()->route('category.index');
    }
}

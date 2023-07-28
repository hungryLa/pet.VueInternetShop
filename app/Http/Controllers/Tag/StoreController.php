<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use App\Models\Tag;
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
            Tag::create($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        return redirect()->route('tag.index');
    }
}

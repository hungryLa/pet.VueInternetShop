<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        try {

            $data = $request->validated();
            $tag->update($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('tag.show',compact('tag'));
    }
}

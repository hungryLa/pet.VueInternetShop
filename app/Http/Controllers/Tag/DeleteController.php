<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        try {

            $tag->delete();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('tag.index');
    }
}

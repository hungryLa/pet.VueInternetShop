<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Color $color)
    {
        try {

            $color->delete();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('color.index');
    }
}

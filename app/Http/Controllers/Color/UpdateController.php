<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Color $color)
    {
        try {

            $data = $request->validated();
            $color->update($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('color.show',compact('color'));
    }
}

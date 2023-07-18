<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('color.create');
    }
}

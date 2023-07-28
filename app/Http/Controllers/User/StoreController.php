<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
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

            User::create($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('user.index');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, User $user)
    {
        try {

            $data = $request->validated();
            $user = $user->update($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('user.show',compact('user'));
    }
}

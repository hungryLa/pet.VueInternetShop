<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user)
    {
        try {

            $user->delete();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('user.index');
    }
}

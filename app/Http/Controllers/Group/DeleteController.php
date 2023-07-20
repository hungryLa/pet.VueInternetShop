<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Group $group)
    {
        try {
            if(count($group->products) == 0){
                $group->delete();
            }

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('group.index');
    }
}

<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\UpdateRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Group $group)
    {
        try {

            $data = $request->validated();
            $group->update($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('group.show',compact('group'));
    }
}

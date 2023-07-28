<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\StoreRequest;
use App\Models\Group;
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
            Group::create($data);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return redirect()->route('group.index');
    }
}

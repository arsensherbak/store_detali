<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\StoreRequest;

use App\Http\Resources\Admin\AdminResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request )
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::firstOrCreate(['email' => $data['email']], $data);

        return new AdminResource($user);
//        return redirect()->route('admin.user.index');
    }
}

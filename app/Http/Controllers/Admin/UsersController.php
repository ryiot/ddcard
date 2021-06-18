<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->latest()
            ->paginate();

        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.form', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->fill($request->only([
            'name',
            'phone',
            'email'
        ]));

        if ($password = $request->input('password')) {
            $user->password = $password;
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', '修改用户成功！');
    }
}

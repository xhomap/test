<?php

namespace App\Http\Controllers;

use App\Country;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users' => User::paginate(7)
        ]);
    }

    public function store(Request $request, User $user)
    {
        $attributes = $request->all();

        $user->create($attributes);

        return redirect(route('user.index'));
    }

    public function create()
    {
        return view('user.create', [
            'countries' => Country::all()
        ]);
    }

    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user,
            'countries' => Country::all()
        ]);
    }

    public function update(User $user, Request $request)
    {
        $attributes = $request->all();

        $user->update($attributes);

        return redirect(route('user.index'));
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect(route('user.index'));
    }
}

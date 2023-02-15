<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        //dd($users);

        return view('index', ['users' => $users]);
    }

    public function create()
    {
        $users = User::all();
        //dd($users);

        return view('create', ['users' => $users]);
    }

    public function storeUser(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->active = 1;
        $user->save();

        return redirect()->route('index');
    }
}

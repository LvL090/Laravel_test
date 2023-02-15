<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();


        return view('index', ['users' => $users]);
    }

    public function create()
    {
        $users = User::all();


        return view('create', ['users' => $users]);
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'lastname' =>'required'
        ]);

 
        User::create($request->all());

        return redirect()->route('check_create');
    }

    public function viewEdit($user_id)
    {

        $user = User::find($user_id);

        $users = User::all();


        return view('edit', ['user' => $user]);
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->save();
        return redirect()->route('check_edit');
    }

    public function delete($user_id){

        $user = User::find($user_id);
        $user->delete();
        return redirect()->route('check_delete');
    }
}

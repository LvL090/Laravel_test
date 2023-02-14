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

        return view('index',['users' =>$users]);
    }

    public function create()
    {

        return view('create');
    }

    public function help($name_game, $categoria = null)
    {
        $date = Now();
        return view('show', [
            'nameVideogame' => $name_game,
            'categoryGame' => $categoria,
            'fecha' => $date
        ]);
    }
}
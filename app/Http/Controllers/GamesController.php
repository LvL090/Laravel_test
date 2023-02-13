<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function index()
    {

        return "Hola esta es la vista games";
    }

    public function create()
    {
        return "Este es el formulario para dar de alta juegos, estamos utilizando un Controlador. ";
    }

    public function help($name_game, $categoria = null)
    {

        if ($categoria) {
            return "Bienvenido a la página del juego: " . $name_game . " que pertenece a la categoria: " . $categoria;
        } else {
            return "Bienvenido a la página del juego: "  . $name_game;
        }
    }
}

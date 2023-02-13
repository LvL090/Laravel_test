<?php

// con php artisan tinker arrancamos terminal en php ejemplos de sintaxis:

//$categoryRPG ->name = "RPG";
//$categoryRPG ->description = "Categoria de RPGs";
//$categoryRPG ->active = true;
//$categoryRPG ->save();


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
}

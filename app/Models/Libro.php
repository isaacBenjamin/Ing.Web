<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    //Permitiendo la asignacion masiva en estos campos
    protected $fillable = ['titulo', 'autor', 'genero', 'disponibilidad'];

    //Agregar relaciones más adelante
}

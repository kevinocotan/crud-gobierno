<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'Proyectos'; 

    protected $fillable = [
        'NombreProyecto',
        'fuenteFondos',
        'MontoPlanificado',
        'MontoPatrocinado',
        'MontoFondosPropios',
    ];
}

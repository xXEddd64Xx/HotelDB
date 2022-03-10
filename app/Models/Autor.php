<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    // Relacionamos el modelo con la tabla
    protected $table = '64_clients';

    // Seleccionamos que campo es la clave primaria
    protected $primaryKey = 'cliente_id';

    // Seleccionamos que campos podran ser rellenados
    protected $fillable = ['nombre', 'apellido', 'tlf', 'dni', 'email', 'direccion', 'pwd'];

    // Escondemos este campo de nuestras vistas
    /* protected $hidden = ['id']; */

}
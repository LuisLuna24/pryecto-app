<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;
    
    protected $table = 'juegos';

    protected  $fillable = ['nombre'];

    //Ignorar los campos dento del arrai
    /*protected $guarded =[];*/

    //metdodo getRouteKeyName para hacer rutas mas bonitas

    public function getRouteKeyName()
    {
        return 'nombre';
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;    
    // Se guardan los "escritos"
    // protected $fillable = ['name','descripcion','categoria'];

    // Se guardan "lo que no esta escrito"
    protected $guarded = [];

    public function getRouteKeyName()
    {
      return 'slug';
    }
}

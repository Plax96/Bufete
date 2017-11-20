<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    protected $table='abogado';
    protected $primaryKey = 'id_abogado';
    public    $timestamps=false;
    protected $fillable=[
      'nombre'
    ];
}

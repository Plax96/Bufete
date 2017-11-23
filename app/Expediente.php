<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
      protected $table='expediente';
      protected $primaryKey = 'id';
      public    $timestamps=false;
      protected $fillable=[
        'resumen'
      ];
}

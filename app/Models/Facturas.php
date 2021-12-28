<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    use HasFactory;
     protected $table = 'facturas';
     protected $fillable = ['id_user' , 'monto_total','impuesto_total'];
 
}

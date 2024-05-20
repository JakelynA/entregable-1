<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $primaryKey='nro_promocion';
    protected $keyType='string';
    public $incrementing = false;
    protected $fillable =  [ 
        'nro_promocion',
        'tipo_viaje',
        'costo',
    ];
    public function Cliente()
    {
        return $this->hasOne(Cliente::class, 'cliente_dni', 'dni');
    }
 
    public function Reservaciones()
    {
        return $this->hasOne(Cliente::class, 'cliente_dni', 'dni');
    }
}

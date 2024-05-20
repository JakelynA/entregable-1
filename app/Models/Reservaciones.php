<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    use HasFactory;
    protected $primaryKey='nro_promocion';
    protected $keyType='string';
    public $incrementing = false;
    protected $fillable =  [ 
        'nro_reservacion',
        'nro_promocion',
        'cliente_dni',
        'pago_adelantao',
    ];
    public function cliente()
    {
        return $this->hasOne(cliente::class, 'cliente_dni', 'dni');
    }
}

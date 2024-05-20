<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey='nro_promocion';
    protected $keyType='string';
    public $incrementing = false;
    protected $fillable =  [ 
        'dni',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'ciudad',
    ];
    public function cliente()
    {
        return $this->hasOne(cliente::class, 'cliente_dni', 'dni');
    }
}

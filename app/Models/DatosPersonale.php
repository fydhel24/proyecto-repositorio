<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonale extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'cedula_identidad',
        'celular',
        'direccion',
        'fecha_nacimiento',
        'id_ciudad_registro',
        'id_pais'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->paterno} {$this->materno}";
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad_registro');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'id_pais');
    }

    public function posgraduante()
    {
        return $this->hasMany(Posgraduante::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

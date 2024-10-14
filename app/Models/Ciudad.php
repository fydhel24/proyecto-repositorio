<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function datosPersonales()
    {
        return $this->hasMany(DatosPersonale::class);
    }
    public function documentos()
    {
       return $this->hasMany(Documento::class);
    }
}

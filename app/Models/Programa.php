<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'version',
        'tipo_programa_id'
    ];

    public function tipoPrograma()
    {
        return $this->belongsTo(TipoPrograma::class, 'tipo_programa_id');
    }
    public function documentos()
    {
       return $this->hasMany(Documento::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posgraduante extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricula',
        'persona_id'
    ];

    public function datosPersonales()
    {
        return $this->belongsTo(DatosPersonale::class, 'persona_id');
    }

    public function autores()
    {
        return $this->hasMany(Autor::class);
    }
    public static function getFullNames()
    {
        return self::with('datosPersonales')
            ->get()
            ->mapWithKeys(function ($posgraduante) {
                return [$posgraduante->id => $posgraduante->datosPersonales->full_name];
            });
    }
}

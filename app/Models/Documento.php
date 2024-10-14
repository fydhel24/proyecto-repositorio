<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $perPage = 20;
    use HasFactory;
    protected $fillable = [
        'titulo',
        'resumen',
        'respaldo_digital_id',
        'programa_id',
        'tipo_programa',
        'modalidad_id',
        'ciudad_id'
    ];
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class, 'modalidad_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function programa()
    {
        return $this->belongsTo(Programa::class, 'programa_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function respaldoDigital()
    {
        return $this->belongsTo(RespaldoDigital::class, 'respaldo_digital_id', 'id');
    }
}

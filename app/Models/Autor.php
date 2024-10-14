<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = [
        'posgraduante_id',
        'documento_id',
    ];

    public function posgraduantes()
    {
        return $this->belongsTo(Posgraduante::class, 'posgraduante_id');
    }

    public function documentos()
    {
        return $this->belongsTo(Documento::class, 'documento_id');
    }
}

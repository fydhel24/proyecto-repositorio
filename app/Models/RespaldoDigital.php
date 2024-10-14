<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespaldoDigital extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'archivo'];

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }
}

<?php

namespace App\Filament\Resources\PosgraduanteResource\Pages;

use App\Filament\Resources\PosgraduanteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePosgraduante extends CreateRecord
{
    protected static string $resource = PosgraduanteResource::class;
    protected function getRedirectUrl(): string
    {
        return PosgraduanteResource::getUrl('index'); // Redirige al índice
    }
}

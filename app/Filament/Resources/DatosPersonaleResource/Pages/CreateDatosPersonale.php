<?php

namespace App\Filament\Resources\DatosPersonaleResource\Pages;

use App\Filament\Resources\DatosPersonaleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDatosPersonale extends CreateRecord
{
    protected static string $resource = DatosPersonaleResource::class;
    protected function getRedirectUrl(): string
    {
        return DatosPersonaleResource::getUrl('index'); // Redirige al índice
    }
}

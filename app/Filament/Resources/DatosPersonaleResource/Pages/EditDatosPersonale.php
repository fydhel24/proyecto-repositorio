<?php

namespace App\Filament\Resources\DatosPersonaleResource\Pages;

use App\Filament\Resources\DatosPersonaleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDatosPersonale extends EditRecord
{
    protected static string $resource = DatosPersonaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return DatosPersonaleResource::getUrl('index'); // Redirige al índice
    }
}

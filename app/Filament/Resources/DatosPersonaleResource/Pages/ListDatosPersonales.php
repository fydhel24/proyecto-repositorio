<?php

namespace App\Filament\Resources\DatosPersonaleResource\Pages;

use App\Filament\Resources\DatosPersonaleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatosPersonales extends ListRecords
{
    protected static string $resource = DatosPersonaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

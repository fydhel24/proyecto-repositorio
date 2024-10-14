<?php

namespace App\Filament\Resources\PosgraduanteResource\Pages;

use App\Filament\Resources\PosgraduanteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosgraduantes extends ListRecords
{
    protected static string $resource = PosgraduanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TfcResource\Pages;

use App\Filament\Resources\TfcResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTfcs extends ListRecords
{
    protected static string $resource = TfcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

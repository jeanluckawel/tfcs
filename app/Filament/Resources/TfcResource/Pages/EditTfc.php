<?php

namespace App\Filament\Resources\TfcResource\Pages;

use App\Filament\Resources\TfcResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTfc extends EditRecord
{
    protected static string $resource = TfcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

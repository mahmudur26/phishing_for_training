<?php

namespace App\Filament\Resources\ClickRecordResource\Pages;

use App\Filament\Resources\ClickRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClickRecord extends EditRecord
{
    protected static string $resource = ClickRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

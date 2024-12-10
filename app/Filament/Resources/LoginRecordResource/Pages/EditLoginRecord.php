<?php

namespace App\Filament\Resources\LoginRecordResource\Pages;

use App\Filament\Resources\LoginRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoginRecord extends EditRecord
{
    protected static string $resource = LoginRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

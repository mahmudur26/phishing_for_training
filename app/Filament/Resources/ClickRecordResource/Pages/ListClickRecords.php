<?php

namespace App\Filament\Resources\ClickRecordResource\Pages;

use App\Filament\Resources\ClickRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClickRecords extends ListRecords
{
    protected static string $resource = ClickRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

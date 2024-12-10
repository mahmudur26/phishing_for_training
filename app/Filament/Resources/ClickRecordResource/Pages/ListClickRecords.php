<?php

namespace App\Filament\Resources\ClickRecordResource\Pages;

use App\Filament\Resources\ClickRecordResource;
use App\Filament\Resources\ClickRecordResource\Widgets\TotalCountOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClickRecords extends ListRecords
{
    protected static string $resource = ClickRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            TotalCountOverview::class,
        ];
    }
}

<?php

namespace App\Filament\Resources\LoginRecordResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\LoginRecordResource;
use App\Filament\Resources\LoginRecordResource\Widgets\TotalLoginCountOverview;

class ListLoginRecords extends ListRecords
{
    protected static string $resource = LoginRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            TotalLoginCountOverview::class,
        ];
    }
}

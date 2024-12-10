<?php

namespace App\Filament\Resources\LoginRecordResource\Widgets;

use App\Models\LoginRecord;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalLoginCountOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalLoginCount = LoginRecord::count();
        return [
            Stat::make('Total Login Attempt', $totalLoginCount),
        ];
    }
}

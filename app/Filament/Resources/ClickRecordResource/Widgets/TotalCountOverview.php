<?php

namespace App\Filament\Resources\ClickRecordResource\Widgets;

use App\Models\LoginPageHit;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
class TotalCountOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $total_hit = LoginPageHit::count();

        return [
            Stat::make('Total', $total_hit),
        ];
    }
}

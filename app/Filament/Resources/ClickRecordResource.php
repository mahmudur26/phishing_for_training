<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ClickRecord;
use App\Models\LoginPageHit;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ClickRecordResource\Pages;
use App\Filament\Resources\ClickRecordResource\RelationManagers;

class ClickRecordResource extends Resource
{
    protected static ?string $model = LoginPageHit::class;

    protected static ?string $label = "Hit Record";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ip_address'),
                TextColumn::make('device_type'),
                TextColumn::make('os_name'),
                TextColumn::make('browser_name'),
                TextColumn::make('created_at')
                    ->formatStateUsing(function ($state){
                        return date_format(Carbon::parse($state), 'd M Y h:i:s A');
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('id', 'DESC');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClickRecords::route('/'),
            'create' => Pages\CreateClickRecord::route('/create'),
            'edit' => Pages\EditClickRecord::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LoginRecord;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LoginRecordResource\Pages;
use App\Filament\Resources\LoginRecordResource\RelationManagers;
use App\Filament\Resources\LoginRecordResource\Widgets\TotalLoginCountOverview;

class LoginRecordResource extends Resource
{
    protected static ?string $model = LoginRecord::class;

    
    protected static ?string $label = "Login Record";
    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email'),
                TextInput::make('password'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email'),
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
                Tables\Actions\ViewAction::make(),
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

    public static function getWidgets(): array
    {
        return [
            TotalLoginCountOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLoginRecords::route('/'),
            'create' => Pages\CreateLoginRecord::route('/create'),
            'edit' => Pages\EditLoginRecord::route('/{record}/edit'),
        ];
    }
}

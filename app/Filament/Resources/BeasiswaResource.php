<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeasiswaResource\Pages;
use App\Models\Beasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Middleware untuk membatasi akses hanya untuk role admin
    public static function getMiddleware(): array
    {
        return [
            'role:admin',
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_penerima')
                    ->label('Nama Penerima')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('jenis_beasiswa')
                    ->label('Jenis Beasiswa')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required(),

                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->required(),

                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_penerima')
                    ->label('Nama Penerima')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jenis_beasiswa')
                    ->label('Jenis Beasiswa')
                    ->sortable(),

                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->money('IDR'),

                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}

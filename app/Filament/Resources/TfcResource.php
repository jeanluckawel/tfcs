<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TfcResource\Pages;
use App\Filament\Resources\TfcResource\RelationManagers;
use App\Models\Tfc;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TfcResource extends Resource
{
    protected static ?string $model = Tfc::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_name')
                ->required()
                ->placeholder('Student Name')
                ->autofocus(),

                Forms\Components\FileUpload::make('file_name')
                ->required(),

                Forms\Components\TextInput::make('title')
                ->required(),

                Forms\Components\Select::make('filiere')
                ->required()
                ->Options([
                    'Genie Logiciel' => 'GL',
                    'Management System d\'information' => 'MSI',
                    'Administration System' => 'AS',
                    'Telecommunication' => 'TLC',
                    'Design et multimedia' => 'DSG'
                ]),

                Forms\Components\DatePicker::make('date')
                ->required()
                ->placeholder('Date')
                ->default(date('Y-m-d')),

//                Forms\Components\TextInput::make('img')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('student_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('filiere')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->searchable()
                    ->sortable(),
//                Tables\Columns\TextColumn::make('img')
//                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTfcs::route('/'),
            'create' => Pages\CreateTfc::route('/create'),
            'edit' => Pages\EditTfc::route('/{record}/edit'),
        ];
    }
}

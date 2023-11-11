<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlunosResource\Pages;
use App\Filament\Resources\AlunosResource\RelationManagers;
use App\Models\Alunos;
use Doctrine\DBAL\Types\BooleanType;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;

class AlunosResource extends Resource
{
    protected static ?string $model = Alunos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('codigo'),
                TextInput::make('name'),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('desistiu'),

                //
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
            'index' => Pages\ListAlunos::route('/'),
            'create' => Pages\CreateAlunos::route('/create'),
            'edit' => Pages\EditAlunos::route('/{record}/edit'),
        ];
    }
}

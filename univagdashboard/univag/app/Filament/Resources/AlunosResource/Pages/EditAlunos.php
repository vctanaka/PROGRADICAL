<?php

namespace App\Filament\Resources\AlunosResource\Pages;

use App\Filament\Resources\AlunosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlunos extends EditRecord
{
    protected static string $resource = AlunosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

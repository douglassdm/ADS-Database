<?php

namespace App\Filament\Resources\AlunoResource\Pages;

use App\Filament\Resources\AlunoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAluno extends EditRecord
{
    protected static string $resource = AlunoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $skills = collect($this->data['skills'] ?? [])
            ->filter(fn ($value) => $value)
            ->keys();
        
        $this->record->skills()->sync($skills);
    }
}

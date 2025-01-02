<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlunoResource\Pages;
use App\Models\Aluno;
use App\Models\Skill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AlunoResource extends Resource
{
    protected static ?string $model = Aluno::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Dados do Aluno')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nome')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('description')
                            ->label('Descrição')
                            ->maxLength(255)
                            ->nullable(),

                        Forms\Components\TextInput::make('company')
                            ->label('Empresa')
                            ->maxLength(255)
                            ->nullable(),

                        Forms\Components\FileUpload::make('image')
                            ->label('Foto')
                            ->image()
                            ->nullable(),
                        
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('github')
                            ->label('GitHub')
                            ->prefix('https://')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('telefone')
                            ->label('Telefone')
                            ->tel()
                            ->nullable()
                            ->maxLength(20),
                    ])
                    ->columns(1),

                Forms\Components\Section::make('Habilidades')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema(
                                Skill::all()->map(fn (Skill $skill) => 
                                    Forms\Components\Toggle::make("skills.{$skill->id}")
                                        ->label($skill->name)
                                        ->onColor('success')
                                        ->offColor('danger')
                                        ->afterStateHydrated(function ($component, $state, $record) use ($skill) {
                                            $component->state(
                                                $record && $record->skills->contains($skill->id)
                                            );
                                        })
                                )->toArray()
                            )
                            ->columns(3)
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->circular(),
                    
                Tables\Columns\TextColumn::make('skills.name')
                    ->label('Habilidades')
                    ->formatStateUsing(function ($state, $record) {
                        $skills = $record->skills->pluck('name');
                        $count = $skills->count();
                        
                        if ($count === 0) {
                            return '-';
                        }
                        
                        $display = $skills->take(2)->join(', ');
                        
                        if ($count > 2) {
                            $display .= ' (+' . ($count - 2) . ')';
                        }
                        
                        return $display;
                    })
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('telefone')
                    ->label('Telefone')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlunos::route('/'),
            'create' => Pages\CreateAluno::route('/create'),
            'edit' => Pages\EditAluno::route('/{record}/edit'),
        ];
    }
}

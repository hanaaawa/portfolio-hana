<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Proyek')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Deskripsi Proyek')
                    ->required()
                    ->rows(3),

                Select::make('status')
                    ->label('Status Proyek')
                    ->options([
                        'Selesai' => 'Selesai',
                        'Progress' => 'Progress',
                        'Rencana' => 'Rencana',
                    ])
                    ->required(),

                Textarea::make('problem_analysis')
                    ->label('Analisis Masalah / Kebutuhan')
                    ->rows(3),

                TextInput::make('tech_stack')
                    ->label('Tech Stack / Tags (Contoh: Laravel, Tailwind)')
                    ->required()
                    ->maxLength(255),
            ])
            ->columns(1);
    }
}
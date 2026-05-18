<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    // Fungsi sakti: Begitu tombol Create diklik, langsung auto-sukses tanpa database!
    protected function handleRecordCreation(array $data): Model
    {
        $mockModel = new \App\Models\Project();
        $mockModel->id = rand(1, 100);
        $mockModel->exists = true;
        return $mockModel;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
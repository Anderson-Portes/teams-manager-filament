<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PersonType;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['name' => 'Admin', 'email' => 'admin@email.com']);
        $statusList = collect(['Em Espera', 'Ativo', 'Desistente']);
        $statusList->each(fn (string $status) => Status::create(['name' => $status]));
        $personTypesList = collect(['Equipista', 'Coordenador', 'Tio Equipista', 'Tio Coordenador']);
        $personTypesList->each(fn (string $personType) => PersonType::create(['name' => $personType]));
    }
}

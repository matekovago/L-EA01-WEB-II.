<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * seed the database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create
        ([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

                $this->call
        ([
            AlkotoSeeder::class,
            MuSeeder::class,
            KapcsolatSeeder::class
        ]);
    }

}

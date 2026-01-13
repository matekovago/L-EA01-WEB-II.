<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kapcsolat;
use Illuminate\Support\Facades\Storage;

class KapcsolatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lines = explode("\n", trim(Storage::get('data/kapcsolat.txt')));

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // fejléc kihagyása

            [$muid, $tipus, $alkotoid] = explode("\t", trim($line));

            Kapcsolat::create([
                'mu_id' => $muid,
                'tipus' => $tipus,
                'alkoto_id' => $alkotoid,
            ]);
        }
    }
}

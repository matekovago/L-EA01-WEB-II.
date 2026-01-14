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
        $content = file_get_contents(storage_path('app/data/kapcsolat.txt'));
        $lines = preg_split("/\r\n|\n|\r/", trim($content));

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

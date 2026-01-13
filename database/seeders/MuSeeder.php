<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mu;
use Illuminate\Support\Facades\Storage;

class MuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lines = explode("\n", trim(Storage::get('data/mu.txt')));

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // fejléc kihagyása

            [$id, $cim, $eredeti, $szinhaz, $ev, $felvonas, $kep] = explode("\t", trim($line));

            Mu::create([
                'id' => $id,
                'cim' => $cim,
                'eredeti' => $eredeti,
                'szinhaz' => $szinhaz,
                'ev' => $ev,
                'felvonas' => $felvonas,
                'kep' => $kep,
            ]);
        }
    }
}

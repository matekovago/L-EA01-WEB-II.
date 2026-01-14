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
        $content = file_get_contents(storage_path('app/data/mu.txt'));
        $lines = preg_split("/\r\n|\n|\r/", trim($content));

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // fejléc kihagyása

            $cols = explode("\t", trim($line));

                // a hiányzó mezők null értékűek lesznek
                $id       = $cols[0] ?? null;
                $cim      = $cols[1] ?? null;
                $eredeti  = $cols[2] ?? null;
                $szinhaz  = $cols[3] ?? null;
                $ev       = $cols[4] ?? null;
                $felvonas = $cols[5] ?? null;
                $kep      = $cols[6] ?? null;


            Mu::create
            ([
                'id' => is_numeric($id) ? (int)$id : null,
                'cim' => $cim,
                'eredeti' => ($eredeti === '' ? null : $eredeti),
                'szinhaz' => ($szinhaz === '' ? null : $szinhaz),
                'ev' => is_numeric($ev) ? (int)$ev : null,
                'felvonas' => is_numeric($felvonas) ? (int)$felvonas : null,
                'kep' => ($kep === '' ? null : $kep),
            ]);

        }
    }
}

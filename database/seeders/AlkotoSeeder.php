<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alkoto;
use Illuminate\Support\Facades\Storage;


class AlkotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      /* dd(
            storage_path('app/data/alkoto.txt'),
            file_exists(storage_path('app/data/alkoto.txt'))
        ); file-beolvasás ellenőrzése */


       // $lines = explode("\n", trim(Storage::get('data/alkoto.txt')));
       $content = file_get_contents(storage_path('app/data/alkoto.txt'));
        $lines = preg_split("/\r\n|\n|\r/", trim($content)); 

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // fejléc kihagyása

            [$id, $nev] = explode("\t", trim($line));

            Alkoto::create([
                'id' => $id,
                'nev' => $nev
            ]);
        }
    }
}

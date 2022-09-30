<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $mahasiswa = [
            ['id' => '1',
            'nama' => 'Gial',
            'nim' => '2009106072',
            'jurusan' =>'Informatika',
            'angkatan' => '2019'
            ],[ 
            'id' => '2',
            'nama' => 'Basith',
            'nim' => '2009106071',
            'jurusan' =>'Informatika',
            'angkatan' => '2020'
            ],
        ];
        foreach ($mahasiswa as $mhs) {
            \App\Models\Mahasiswa::firstOrCreate($mhs);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemain::create([
            'nim' => '121212',
            'kelas' => 'A12',
            'nama_murid' => 'Vini',
            'hp' => '0812345678910'
        ]);
        Pemain::create([
            'nim' => '111111',
            'kelas' => 'A13',
            'nama_murid' => 'Vidi',
            'hp' => '0811111111111'
        ]);
        Pemain::create([
            'nim' => '222222',
            'kelas' => 'A14',
            'nama_murid' => 'Vici',
            'hp' => '0812222222222'
        ]);
        Pemain::create([
            'nim' => '111222',
            'kelas' => 'A15',
            'nama_murid' => 'Vincai',
            'hp' => '0812333333333'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SepedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sepedas')->insert([
            'nama' => 'Sepeda Gunung',
            'jenis' => 'Downhill',
            'gambar' => 'sepedagunung.jpg',
        ]);

        DB::table('sepedas')->insert([
            'nama' => 'Sepeda Balap',
            'jenis' => 'Endurance',
            'gambar' => 'sepedabalap.jpg',
        ]);

        DB::table('sepedas')->insert([
            'nama' => 'Sepeda Wanita',
            'jenis' => 'Keranjang',
            'gambar' => 'sepedawanita.jpg',
        ]);

        DB::table('sepedas')->insert([
            'nama' => 'Sepeda Anak',
            'jenis' => 'Bmx',
            'gambar' => 'sepedaanak.jpg',
        ]);
    }
}

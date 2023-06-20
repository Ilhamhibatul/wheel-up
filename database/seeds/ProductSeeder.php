<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Balap Helios A7X',
            'sepeda_id' => '2',
            'gambar' => 'polygonsepedabalapheliosa7x.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Balap Helios A7',
            'sepeda_id' => '2',
            'gambar' => 'polygonsepedabalapheliosa7.jpg',
        ]);
        
        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Balap Strattos S2',
            'sepeda_id' => '2',
            'gambar' => 'polygonsepedabalapstrattoss2.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Balap Strattos S3',
            'sepeda_id' => '2',
            'gambar' => 'polygonsepedabalapstrattoss3.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Balap Helios A8',
            'sepeda_id' => '2',
            'gambar' => 'polygonsepedabalapheliosa8.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Gunung Monarch M2 2019',
            'sepeda_id' => '1',
            'gambar' => 'polygonsepedagunungmonarchm22019.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Wimcycle Sepeda Gunung Falcon 2021',
            'sepeda_id' => '1',
            'gambar' => 'wimcyclesepedagunungfalcon2021.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Wimcycle Sepeda Anak Dragster 20',
            'sepeda_id' => '4',
            'gambar' => 'wimcyclesepedaanakdragster20.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Wimcycle Sepeda Anak Thrasher 20',
            'sepeda_id' => '4',
            'gambar' => 'wimcyclesepedaanakthrasher20.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Wimcycle Sepeda Anak Big Foot 20 2021',
            'sepeda_id' => '4',
            'gambar' => 'wimcyclesepedaanakbigfoot202021.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda BMX Rogue',
            'sepeda_id' => '4',
            'gambar' => 'polygonsepedabmxrogue.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Polygon Sepeda Kota Lovina 20',
            'sepeda_id' => '3',
            'gambar' => 'polygonsepedakotalovina20.jpg',
        ]);
    }
}

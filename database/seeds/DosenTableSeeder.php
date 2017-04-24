<?php

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '1',
        	'nama' => 'Ir. Muchammad Husni, M.Kom',
        	'email' => 'husni[at]its.ac.id',
        	'no_hp' => '081234123412',
        	'alamat' => 'Blok T Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '1',
        	'nama' => 'Prof.Ir. Supeno Djanali, M.Sc.,Ph.D',
        	'email' => 'supeno[at]its.ac.id',
        	'no_hp' => '081234123413',
        	'alamat' => 'Blok T Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '1',
        	'nama' => 'Ir. Muchammad Husni, M.Kom',
        	'email' => 'husni[at]its.ac.id',
        	'no_hp' => '081234123412',
        	'alamat' => 'Blok T Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '1',
        	'nama' => 'Ir. Muchammad Husni, M.Kom',
        	'email' => 'husni[at]its.ac.id',
        	'no_hp' => '081234123412',
        	'alamat' => 'Blok T Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);
    }
}

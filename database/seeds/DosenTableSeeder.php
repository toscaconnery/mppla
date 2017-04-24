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
        	'alamat' => 'Blok T No 31 Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '2',
        	'nama' => 'Prof.Ir. Supeno Djanali, M.Sc.,Ph.D',
        	'email' => 'supeno[at]its.ac.id',
        	'no_hp' => '081234123413',
        	'alamat' => 'Blok K No 32 Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '3',
        	'nama' => 'Tohari Ahmad, S.Kom.,MIT.,Ph.D',
        	'email' => 'tohari[at]its.ac.id',
        	'no_hp' => '081234123414',
        	'alamat' => 'Blok J No 54 Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '4',
        	'nama' => 'Waskitho Wibisono, S.Kom.,M.Eng.,Ph.D',
        	'email' => 'husni[at]its.ac.id',
        	'no_hp' => '081234123415',
        	'alamat' => 'Blok F No 12 Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon

        ]);
    }
}

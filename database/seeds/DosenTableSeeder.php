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
        	'no_hp' => '081234123342',
        	'alamat' => 'Blok J No 54 Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('dosen')->insert([
        	'id_lab' => '6',
        	'nip' => '4',
        	'nama' => 'Waskitho Wibisono, S.Kom.,M.Eng.,Ph.D',
        	'email' => 'husni[at]its.ac.id',
        	'no_hp' => '0812341233432',
        	'alamat' => 'Blok F No 12 Institut Teknologi Sepuluh Nopember',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '5',
            'nama' => 'Royyana M Ijtihadie, S.Kom.,M.Kom.,Ph.D',
            'email' => 'roy[at]its.ac.id',
            'no_hp' => '0812341239348',
            'alamat' => 'Blok G No 16 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

        DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '6',
            'nama' => 'Henning Titi Ciptaningtyas, S.Kom.,M.Kom.',
            'email' => 'henning[at]its.ac.id',
            'no_hp' => '081234123847',
            'alamat' => 'Blok H No 34 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

        DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '7',
            'nama' => 'Baskoro Adi Pratomo, S.Kom, M.Kom',
            'email' => 'baskoro[at]its.ac.id',
            'no_hp' => '081234374415',
            'alamat' => 'Blok Y No 43 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

        DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '8',
            'nama' => 'Dr. Radityo Anggoro , S.Kom.,M.Sc.',
            'email' => 'onggo[at]its.ac.id',
            'no_hp' => '0812383538345',
            'alamat' => 'Blok Z No 44 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class LaboratoriumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Pemrograman 1',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Pemrograman 2',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Komputasi Cerdas Visual',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Komputasi Berbasis Jaringan',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Rekayasa Perangkat Lunak',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Arsitektur Jaringan Komputer',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Interaksi Grafika Dan Komputer',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Algoritma Pemrograman',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Manajemen Informasi',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Dasar Terapan Komputer',
        	'created_at' => new \Carbon\Carbon
        ]);
    }
}

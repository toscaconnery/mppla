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
        	'nama_lab' => 'Laboratorium Komputasi Cerdas Visual',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Komputasi Berbasis Jaringan',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Rekayasa Perangkat Lunak',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Arsitektur Jaringan Komputer',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Interaksi Grafika Dan Komputer',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Algoritma Pemrograman',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Manajemen Informasi',
        	'created_at' => new \Carbon\Carbon
        ]);

        DB::table('laboratorium')->insert([
        	'nama_lab' => 'Laboratorium Dasar Terapan Komputer',
        	'created_at' => new \Carbon\Carbon
        ]);
    }
}

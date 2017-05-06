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

         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '9',
            'nama' => 'Hudan Studiawan, S.Kom.,M.Kom.',
            'email' => 'hudan[at]if.its.ac.id',
            'no_hp' => '081234765897',
            'alamat' => 'Blok A No 99 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '10',
            'nama' => 'Ary Mazharuddin Shiddiqi, S.Kom.,M.Comp.Sc',
            'email' => 'ary.shiddiqi[at]gmail.com',
            'no_hp' => '081234765896',
            'alamat' => 'Blok B No 12 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
    
        ]);    

         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '11',
            'nama' => 'Wahyu Suadi, S.Kom.,M.Kom.',
            'email' => 'wahyu[at]its-sby.edu',
            'no_hp' => '081234765099',
            'alamat' => 'Blok H No 11 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

        DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '12',
            'nama' => 'Victor Hariadi, S.Si.,M.Kom.',
            'email' => 'victor[at]if.its.ac.id',
            'no_hp' => '081234235099',
            'alamat' => 'Blok B No 11 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]); 

         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '13',
            'nama' => 'Prof.Dr.Ir. Joko Lianto Buliali',
            'email' => 'joko[at]if.its.ac.id',
            'no_hp' => '081234235098',
            'alamat' => 'Blok C No 11 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '14',
            'nama' => 'Yudhi Purwananto, S.Kom.,M.Kom.',
            'email' => 'jyudhi[at]its-sby.edu',
            'no_hp' => '081234235987',
            'alamat' => 'Blok J No 11 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]); 

           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '15',
            'nama' => 'Ahmad Saikhu, S.SI.,MT.',
            'email' => 'saikhu[at]cs.its.ac.id',
            'no_hp' => '0812342359654',
            'alamat' => 'Blok U No 11 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '16',
            'nama' => 'Bilqis Amaliah, S.Kom.,M.Kom.',
            'email' => 'bilqis[at]its-sby.edu',
            'no_hp' => '0812342359432',
            'alamat' => 'Blok U No 11 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);  

           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '17',
            'nama' => 'Dini Adni Navastara, S.Kom.,M.Sc',
            'email' => 'dini_navastara[at]if.its.ac.id',
            'no_hp' => '0812349869432',
            'alamat' => 'Blok J No 34 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);  
             
          DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '18',
            'nama' => 'Ir. suhadi.lili',
            'email' => 'suhadi.lili[at]gmail.com',
            'no_hp' => '0812349869789',
            'alamat' => 'Blok H No 34 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);  

          DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '19',
            'nama' => 'Rully Sulaiman, S.Kom.,M.Kom.',
            'email' => 'rully[at]is.its.ac.id',
            'no_hp' => '0812789869789',
            'alamat' => 'Blok H No 80 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '20',
            'nama' => 'Arya Yudhi Wijaya, S.Kom.,M.Kom.',
            'email' => 'arya.wijaya[at]gmail.com',
            'no_hp' => '0812777769789',
            'alamat' => 'Blok H No 60 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);  


         DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '21',
            'nama' => 'Ir. FX. Arunanto, M.Sc.',
            'email' => 'anto[at]if.its.ac.id',
            'no_hp' => '0812777769111',
            'alamat' => 'Blok J No 60 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

          DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '22',
            'nama' => 'Dr.tech.Ir. Raden Venantius Hari Ginardi, M.Sc.',
            'email' => 'hari[at]its-sby.edu',
            'no_hp' => '0812778869111',
            'alamat' => 'Blok J No 22 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);               

           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '23',
            'nama' => 'Diana Purwitasari, S.Kom.,M.Sc.',
            'email' => 'diana[at]if.its.ac.id',
            'no_hp' => '0812778869475',
            'alamat' => 'Blok J No 66 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]); 


           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '24',
            'nama' => 'Wijayanti Nurul Khotimah, S.Kom.,M.Sc.',
            'email' => 'wijayanti[at]if.its.ac.id',
            'no_hp' => '0812787669475',
            'alamat' => 'Blok J No 76 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);


           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '25',
            'nama' => 'Abdul Munif, S.Kom.,M.Sc.',
            'email' => 'munif.if[at]gmail.com',
            'no_hp' => '0812788739475',
            'alamat' => 'Blok J No 21 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);


            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '26',
            'nama' => 'Fajar Baskoro, S.Kom.,MT.',
            'email' => 'fajar[at]its-sby.edu',
            'no_hp' => '0812788739111',
            'alamat' => 'Blok K No 21 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]); 

             DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '27',
            'nama' => 'Ridho Rahman Hariadi, S.Kom.,M.Sc.',
            'email' => 'ridho[at]if.its.ac.id',
            'no_hp' => '0812788739321',
            'alamat' => 'Blok L No 21 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

              DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '28',
            'nama' => 'Rizky Januar Akbar, S.Kom.,M.Eng.',
            'email' => 'rizky[at]if.its.ac.id',
            'no_hp' => '081278847891',
            'alamat' => 'Blok M No 29 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon

        ]);
            
             DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '29',
            'nama' => 'Dwi Sunaryono, S.Kom.,M.Kom.',
            'email' => 'dwi.syn[at]gmail.com',
            'no_hp' => '081278847785',
            'alamat' => 'Blok H No 26 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);
        
            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '30',
            'nama' => 'Prof.Drs.Ec.Ir. Riyanarto Sarno, M.Sc.,Ph.D',
            'email' => 'riyanarto[at]if.its.ac.id',
            'no_hp' => '081278847000',
            'alamat' => 'Blok J No 90 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);
        
            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '31',
            'nama' => 'Imam Kuswardayan, S.Kom.,MT',
            'email' => 'imam[at]its.ac.id',
            'no_hp' => '081278847001',
            'alamat' => 'Blok J No 50 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);
        
            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '32',
            'nama' => 'Ratih Nur Esti Anggraini, S.Kom.,M.Sc.',
            'email' => 'ratih_nea[at]if.its.ac.id',
            'no_hp' => '081278847002',
            'alamat' => 'Blok J No 51 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon 
        ]);
        
            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '33',
            'nama' => 'Sarwosri, S.Kom.,M.T.',
            'email' => 'sri[at]its-sby.edu',
            'no_hp' => '081278847003',
            'alamat' => 'Blok J No 52 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);
           
           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '34',
            'nama' => 'Adhatus Solichah Ahmadiyah, S.Kom.,M.Sc',
            'email' => 'adhatus[at]if.its.ac.id',
            'no_hp' => '081278847004',
            'alamat' => 'Blok J No 53 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '35',
            'nama' => 'Nurul Fajrin Ariyani, S.Kom.,M.Sc.',
            'email' => 'nurulfajrin[at]if.its.ac.id ',
            'no_hp' => '081278847004',
            'alamat' => 'Blok J No 54 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);


           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '36',
            'nama' => 'Anny Yuniarti, S.Kom.,M.Comp.Sc',
            'email' => 'anny[at]if.its.ac.id ',
            'no_hp' => '081278847006',
            'alamat' => 'Blok A No 56 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);


           DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '37',
            'nama' => 'Dr.Eng. Nanik Suciati, S.Kom.,M.Kom.',
            'email' => 'nanik[at]if.its.ac.id ',
            'no_hp' => '081278847007',
            'alamat' => 'Blok A No 57 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '38',
            'nama' => 'Dr.Eng Darlis Herumurti, S.Kom.,M.Kom.',
            'email' => 'darlis[at]its-sby.edu ',
            'no_hp' => '081278847008',
            'alamat' => 'Blok A No 58 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '39',
            'nama' => 'Dr. Chastine Fatichah, S.Kom.,M.Kom.',
            'email' => 'chastine[at]cs.its.ac.id ',
            'no_hp' => '081278847009',
            'alamat' => 'Blok A No 59 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '40',
            'nama' => 'Dr. Agus Zainal Arifin, S.Kom.,M.Kom.',
            'email' => 'agusza[at]cs.its.ac.id',
            'no_hp' => '081278847010',
            'alamat' => 'Blok A No 60 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '41',
            'nama' => 'Prof.Ir. Handayani Tjandrasa, M.Sc.,Ph.D',
            'email' => 'handatj[at]its.ac.id',
            'no_hp' => '081278847011',
            'alamat' => 'Blok B No 61 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '42',
            'nama' => 'Isye Arieshanti, S.Kom.,M.Phil.',
            'email' => 'arieshanti[at]if.its.ac.id',
            'no_hp' => '081278847012',
            'alamat' => 'Blok B No 62 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '42',
            'nama' => 'Isye Arieshanti, S.Kom.,M.Phil.',
            'email' => 'arieshanti[at]if.its.ac.id',
            'no_hp' => '081278847012',
            'alamat' => 'Blok B No 62 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

            DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '43',
            'nama' => 'Ir. Siti Rochimah, MT.,Ph.D',
            'email' => 'siti[at]its-sby.edu',
            'no_hp' => '081278847013',
            'alamat' => 'Blok B No 63 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

             DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '44',
            'nama' => 'Daniel Oranova Siahaan, S.Kom.,M.Sc.,PD.Eng',
            'email' => 'danielos[at]cs.its.ac.id',
            'no_hp' => '081278847014',
            'alamat' => 'Blok B No 64 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

              DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '45',
            'nama' => 'Umi Laili Yuhana, S.Kom.,M.Sc.',
            'email' => 'yuhana[at]cs.its.ac.id',
            'no_hp' => '081278847015',
            'alamat' => 'Blok B No 65 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

               DB::table('dosen')->insert([
            'id_lab' => '6',
            'nip' => '46',
            'nama' => 'Umi Laili Yuhana, S.Kom.,M.Sc.',
            'email' => 'yuhana[at]cs.its.ac.id',
            'no_hp' => '081278847015',
            'alamat' => 'Blok B No 65 Institut Teknologi Sepuluh Nopember',
            'created_at' => new \Carbon\Carbon
        ]);

    }
}

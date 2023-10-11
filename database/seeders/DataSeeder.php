<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'nama_kategori' => 'wajib',
            'keterangan' => 'wajib diikuti oleh seluruh siswa',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'tidak wajib',
            'keterangan' => 'tidak wajib diikuti oleh siswa',
        ]);


        //    table kelas
        DB::table('kelas')->insert([
            'kelas' => 'X',

        ]);
        DB::table('kelas')->insert([
            'kelas' => 'XI',
        ]);
        DB::table('kelas')->insert([
            'kelas' => 'XII',
        ]);
        // end table kelas 

        // table ekstra 
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'pramuka',
            'id_kategori' => '1',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'basket',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'pmr',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'paduan suara',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'hadra',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'voly',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'silat',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'drumband',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'futsal',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'sepak bola',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'tari',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'panahan',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'bulu tangkis',
            'id_kategori' => '2',
        ]);
        DB::table('ekstra')->insert([
            'nama_ekstra' => 'musik band',
            'id_kategori' => '2',
        ]);
        // end table ekstra 

        // table pembina 
        DB::table('pembina')->insert([
            'nama_pembina' => 'Agung Rosarya E., S.Pd',
            'id_ekstra' => '4',
            'no_hp' => '+6281333086051',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Drs.Dwi Arianto, M.M',
            'id_ekstra' => '9',
            'no_hp' => '+6281233634428',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'M.Ridwan Saidi, S.Pd',
            'id_ekstra' => '10',
            'no_hp' => '+6285655955366',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'AW.Hendro P.W., S.Sn',
            'id_ekstra' => '14',
            'no_hp' => '+6282141252371',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'S.Mudtrikatul U., S.Pd',
            'id_ekstra' => '11',
            'no_hp' => '+628223377533',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'A. Hamam Al Fadil, S.Ag',
            'id_ekstra' => '5',
            'no_hp' => '+62',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'A. Sugianto, S.Pd',
            'id_ekstra' => '2',
            'no_hp' => '+6281333735886',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'A. Sugianto, S.Pd',
            'id_ekstra' => '13',
            'no_hp' => '+6281333735886',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Arif Subagyo, S.Pd ',
            'id_ekstra' => '8',
            'no_hp' => '+6285212543094',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Deni Putra Pratama, S.Pd',
            'id_ekstra' => '7',
            'no_hp' => '+62 852-3316-1461',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Drs.Didik Cahyono',
            'id_ekstra' => '6',
            'no_hp' => '+628124938743',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Nanang Kristanto, SE',
            'id_ekstra' => '3',
            'no_hp' => '+6281615755133 ',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Moh. Ghandy Yudha, S.Pd I',
            'id_ekstra' => '1',
            'no_hp' => '+6285331333239',
            'alamat' => '',
        ]);
        DB::table('pembina')->insert([
            'nama_pembina' => 'Achmad Muzakki, S.Pd',
            'id_ekstra' => '12',
            'no_hp' => '+6285236555774',
            'alamat' => '',
        ]);
        
        // end table pembina 

    // table pelatih 
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'M.Muwafikur Hoyr',
        'id_ekstra' => '1',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Drs.Didik Cahyono',
        'id_ekstra' => '6',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Rendi Ainun Farza',
        'id_ekstra' => '3',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Ali Akbar Kholilullah',
        'id_ekstra' => '2',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Rico Arnanda,s.Ds',
        'id_ekstra' => '9',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Hafurda Yudhistira Yoga F',
        'id_ekstra' => '8',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'ilmik',
        'id_ekstra' => '10',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Lukmanul Hakim,M.Pd.I',
        'id_ekstra' => '5',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Agung Rosariya Elinda,S.Pd ',
        'id_ekstra' => '4',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Nanang Dani Rosidi Elinda,S.Pd',
        'id_ekstra' => '12',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Imron',
        'id_ekstra' => '7',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Rina Wahyuningtiyas,S.Pd',
        'id_ekstra' => '11',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Ahmad Soegianto,S.pd',
        'id_ekstra' => '13',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    DB::table('pelatih')->insert([
        'nama_pelatih' => 'Febri Hariyanto',
        'id_ekstra' => '14',
        'no_hp'=>'',
        'alamat' => ''
    ]);
    // end table pelatih


    }
}
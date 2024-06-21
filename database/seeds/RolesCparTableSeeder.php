<?php

use Illuminate\Database\Seeder;

class RolesCparTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //adm
        DB::table('roles')->insert([
            //'id' => 7,
            'app_id' => 3,
            'code' => 'cpar-adm',
            'name' => 'Administrator CPAR App.',
            'description' => 'Role Administrator memiliki akses ke semua feature aplikasi.',
        ]);

        //post
        DB::table('roles')->insert([
            //'id' => 8,
            'app_id' => 3,
            'code' => 'cpar-post',
            'name' => 'Poster CPAR App.',
            'description' => 'Role Poster hanya memiliki akses untuk memposting dokumen.',
        ]);

        //rpt
        DB::table('roles')->insert([
            //'id' => 9,
            'app_id' => 3,
            'code' => 'cpar-rpt',
            'name' => 'Reporter CPAR App.',
            'description' => 'Role Reporter hanya memiliki akses untuk mencetak laporan.',
        ]);
        
    }
}

<?php

use Illuminate\Database\Seeder;

class RolesDmsTableSeeder extends Seeder
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
            //'id' => 1,
            'app_id' => 1,
            'code' => 'dms-adm',
            'name' => 'Administrator DMS App.',
            'description' => 'Role Administrator memiliki akses ke semua feature aplikasi.',
        ]);

        //post
        DB::table('roles')->insert([
            //'id' => 2,
            'app_id' => 1,
            'code' => 'dms-post',
            'name' => 'Poster DMS App.',
            'description' => 'Role Poster hanya memiliki akses untuk memposting dokumen.',
        ]);

        //rpt
        DB::table('roles')->insert([
            //'id' => 3,
            'app_id' => 1,
            'code' => 'dms-rpt',
            'name' => 'Reporter DMS App.',
            'description' => 'Role Reporter hanya memiliki akses untuk mencetak laporan.',
        ]);
        
    }
}

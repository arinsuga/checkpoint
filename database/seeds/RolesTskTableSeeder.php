<?php

use Illuminate\Database\Seeder;

class RolesTskTableSeeder extends Seeder
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
            //'id' => 4,
            'app_id' => 2,
            'code' => 'tsk-adm',
            'name' => 'Administrator TSK App.',
            'description' => 'Role Administrator memiliki akses ke semua feature aplikasi.',
        ]);

        //post
        DB::table('roles')->insert([
            //'id' => 5,
            'app_id' => 2,
            'code' => 'tsk-post',
            'name' => 'Poster TSK App.',
            'description' => 'Role Poster hanya memiliki akses untuk memposting dokumen.',
        ]);

        //rpt
        DB::table('roles')->insert([
            //'id' => 6,
            'app_id' => 2,
            'code' => 'tsk-rpt',
            'name' => 'Reporter TSK App.',
            'description' => 'Role Reporter hanya memiliki akses untuk mencetak laporan.',
        ]);
        
    }
}

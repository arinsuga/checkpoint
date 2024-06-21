<?php

use Illuminate\Database\Seeder;

class RoleUserCparTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* admin@mail.com  */
        //app(cpar)->role(cpar-adm)->user(admin@mail.com)
        DB::table('role_user')->insert([
            //'id' => 1,
            'app_id' => 3, //app(cpar)
            'role_id' => 7, //role(cpar-adm)
            'user_id' => 1, //user(admin@mail.com)
        ]);

        /* staff1@mail.com  */
        //app(cpar)->role(cpar-post)->user(staff1@mail.com)
        DB::table('role_user')->insert([
            //'id' => 1,
            'app_id' => 3, //app(cpar)
            'role_id' => 2, //role(cpar-post)
            'user_id' => 2, //user(staff1@mail.com)
        ]);
        //app(cpar)->role(cpar-rpt)->user(staff1@mail.com)
        DB::table('role_user')->insert([
            //'id' => 1,
            'app_id' => 3, //app(cpar)
            'role_id' => 3, //role(cpar-rpt)
            'user_id' => 2, //user(staff1@mail.com)
        ]);

        // /* staff2@mail.com  */
        // //app(cpar)->role(cpar-rpt)->user(staff2@mail.com)
        // DB::table('role_user')->insert([
        //     //'id' => 1,
        //     'app_id' => 3, //app(cpar)
        //     'role_id' => 3, //role(cpar-rpt)
        //     'user_id' => 3, //user(staff2@mail.com)
        // ]);

    }
}

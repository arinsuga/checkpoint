<?php

use Illuminate\Database\Seeder;

class RoleUserTskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* admin@mail.com  */
        //app(tsk)->role(tsk-adm)->user(admin@mail.com)
        DB::table('role_user')->insert([
            //'id' => 1,
            'app_id' => 2, //app(tsk)
            'role_id' => 4, //role(tsk-adm)
            'user_id' => 1, //user(admin@mail.com)
        ]);

        // /* staff1@mail.com  */
        // //app(tsk)->role(tsk-post)->user(staff1@mail.com)
        // DB::table('role_user')->insert([
        //     //'id' => 1,
        //     'app_id' => 2, //app(tsk)
        //     'role_id' => 2, //role(tsk-post)
        //     'user_id' => 2, //user(staff1@mail.com)
        // ]);
        // //app(tsk)->role(tsk-rpt)->user(staff1@mail.com)
        // DB::table('role_user')->insert([
        //     //'id' => 1,
        //     'app_id' => 2, //app(tsk)
        //     'role_id' => 3, //role(tsk-rpt)
        //     'user_id' => 2, //user(staff1@mail.com)
        // ]);

        /* staff2@mail.com  */
        //app(tsk)->role(tsk-rpt)->user(staff2@mail.com)
        DB::table('role_user')->insert([
            //'id' => 1,
            'app_id' => 2, //app(tsk)
            'role_id' => 3, //role(tsk-rpt)
            'user_id' => 3, //user(staff2@mail.com)
        ]);

    }
}

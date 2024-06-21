<?php

use Illuminate\Database\Seeder;

class RoleUserDmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* admin@mail.com  */
        //app(dms)->role(dms-adm)->user(admin@mail.com)
        DB::table('role_user')->insert([
            'app_id' => 1, //app(dms)
            'role_id' => 1, //role(dms-adm)
            'user_id' => 1, //user(admin@mail.com)
        ]);

        /* staff1@mail.com  */
        //app(dms)->role(dms-post)->user(staff1@mail.com)
        DB::table('role_user')->insert([
            'app_id' => 1, //app(dms)
            'role_id' => 2, //role(dms-post)
            'user_id' => 2, //user(staff1@mail.com)
        ]);
        //app(dms)->role(dms-rpt)->user(staff1@mail.com)
        DB::table('role_user')->insert([
            'app_id' => 1, //app(dms)
            'role_id' => 3, //role(dms-rpt)
            'user_id' => 2, //user(staff1@mail.com)
        ]);

        // /* staff2@mail.com  */
        // //app(dms)->role(dms-rpt)->user(staff2@mail.com)
        // DB::table('role_user')->insert([
        //     'app_id' => 1, //app(dms)
        //     'role_id' => 3, //role(dms-rpt)
        //     'user_id' => 3, //user(staff2@mail.com)
        // ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('role_user')->delete();
        // //app->dms
        // $this->call('RoleUserDmsTableSeeder');
        // //app->tsk
        // $this->call('RoleUserTskTableSeeder');
        // //app->cpar
        // $this->call('RoleUserCparTableSeeder');

        DB::table("role_user")->insert([ "id" => 1, "app_id" => 4, "role_id" => 11, "user_id" => 200, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 2, "app_id" => 4, "role_id" => 16, "user_id" => 257, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 3, "app_id" => 4, "role_id" => 14, "user_id" => 56, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 4, "app_id" => 4, "role_id" => 14, "user_id" => 67, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 5, "app_id" => 4, "role_id" => 14, "user_id" => 149, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 6, "app_id" => 4, "role_id" => 14, "user_id" => 200, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 7, "app_id" => 4, "role_id" => 14, "user_id" => 329, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 8, "app_id" => 4, "role_id" => 14, "user_id" => 330, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 9, "app_id" => 4, "role_id" => 14, "user_id" => 331, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 10, "app_id" => 4, "role_id" => 14, "user_id" => 332, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 11, "app_id" => 4, "role_id" => 14, "user_id" => 333, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 12, "app_id" => 4, "role_id" => 14, "user_id" => 334, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 13, "app_id" => 4, "role_id" => 14, "user_id" => 335, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 14, "app_id" => 4, "role_id" => 14, "user_id" => 336, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 15, "app_id" => 4, "role_id" => 14, "user_id" => 337, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 16, "app_id" => 4, "role_id" => 14, "user_id" => 338, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 17, "app_id" => 4, "role_id" => 14, "user_id" => 339, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 18, "app_id" => 4, "role_id" => 14, "user_id" => 340, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 19, "app_id" => 4, "role_id" => 14, "user_id" => 341, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 20, "app_id" => 4, "role_id" => 14, "user_id" => 342, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 21, "app_id" => 4, "role_id" => 14, "user_id" => 343, "created_at" => null, "updated_at" => null, ]); 
        


    }
}

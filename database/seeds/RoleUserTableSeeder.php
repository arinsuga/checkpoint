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

        DB::table("role_user")->insert([ "id" => 1, "app_id" => 4, "role_id" => 10, "user_id" => 1, "created_at" => null, "updated_at" => null, ]); 

        DB::table("role_user")->insert([ "id" => 22, "app_id" => 4, "role_id" => 11, "user_id" => 2, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 23, "app_id" => 4, "role_id" => 11, "user_id" => 3, "created_at" => null, "updated_at" => null, ]); 

        DB::table("role_user")->insert([ "id" => 3, "app_id" => 4, "role_id" => 14, "user_id" => 1, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 4, "app_id" => 4, "role_id" => 14, "user_id" => 2, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 5, "app_id" => 4, "role_id" => 14, "user_id" => 3, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 6, "app_id" => 4, "role_id" => 14, "user_id" => 4, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 7, "app_id" => 4, "role_id" => 14, "user_id" => 5, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 8, "app_id" => 4, "role_id" => 14, "user_id" => 6, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 9, "app_id" => 4, "role_id" => 14, "user_id" => 7, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 10, "app_id" => 4, "role_id" => 14, "user_id" => 8, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 11, "app_id" => 4, "role_id" => 14, "user_id" => 9, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 12, "app_id" => 4, "role_id" => 14, "user_id" => 10, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 13, "app_id" => 4, "role_id" => 14, "user_id" => 11, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 14, "app_id" => 4, "role_id" => 14, "user_id" => 12, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 15, "app_id" => 4, "role_id" => 14, "user_id" => 13, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 16, "app_id" => 4, "role_id" => 14, "user_id" => 14, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 17, "app_id" => 4, "role_id" => 14, "user_id" => 15, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 18, "app_id" => 4, "role_id" => 14, "user_id" => 16, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 19, "app_id" => 4, "role_id" => 14, "user_id" => 17, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 20, "app_id" => 4, "role_id" => 14, "user_id" => 18, "created_at" => null, "updated_at" => null, ]); 
        DB::table("role_user")->insert([ "id" => 21, "app_id" => 4, "role_id" => 14, "user_id" => 19, "created_at" => null, "updated_at" => null, ]); 
        


    }
}

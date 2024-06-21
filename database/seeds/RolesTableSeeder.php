<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('roles')->delete();
        // //app->dms->1
        // $this->call('RolesDmsTableSeeder');
        // //app->tsk->2
        // $this->call('RolesTskTableSeeder');
        // //app->cpar->3
        // $this->call('RolesCparTableSeeder');

        DB::table("roles")->insert([ "id" => 10, "app_id" => 4, "code" => "dnb-super", "name" => "Super User DNB", "description" => "Hak Akses: Full Kontrol" ]); 
        DB::table("roles")->insert([ "id" => 11, "app_id" => 4, "code" => "dnb-admin", "name" => "Admin DNB", "description" => "Hak Akses: Reporting, User Akses" ]); 
        DB::table("roles")->insert([ "id" => 12, "app_id" => 4, "code" => "dnb-dsg", "name" => "Designer DNB", "description" => "Hak Akses: Checkin – Checkout, History" ]); 
        DB::table("roles")->insert([ "id" => 13, "app_id" => 4, "code" => "dnb-plk", "name" => "Pelaksana DNB", "description" => "Hak Akses: Checkin – Checkout, History" ]); 
        DB::table("roles")->insert([ "id" => 14, "app_id" => 4, "code" => "dnb-user", "name" => "User DNB", "description" => "Hak Akses: Checkin – Checkout, History" ]); 
        DB::table("roles")->insert([ "id" => 15, "app_id" => 4, "code" => "hrd-super", "name" => "Super User HRD", "description" => "Hak Akses: Reporting Absen Checkin – Checkout" ]); 
        DB::table("roles")->insert([ "id" => 16, "app_id" => 4, "code" => "hrd-admin", "name" => "Admin HRD", "description" => "Hak Akses: Reporting Absen Checkin – Checkout" ]); 
                                        
    }
}

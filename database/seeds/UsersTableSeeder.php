<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('users')->delete();
        DB::table("users")->insert([ "id" => 1, "name" => "Super Admin", "email" => "superadmin@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 2, "name" => "Admin 1", "email" => "admin1@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 3, "name" => "Admin 2", "email" => "admin2@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 4, "name" => "Guest 1", "email" => "guest1@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 5, "name" => "Guest 2", "email" => "guest2@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 6, "name" => "admin", "email" => "admin@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 7, "name" => "it", "email" => "it@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 8, "name" => "karyawan", "email" => "karyawan@mail.com", "email_verified_at" => now(), "dept" => "null", "noabsen" => null, "password" => Hash::make('hadiprana'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 9, "name" => "Adnan", "email" => "adnan@mail.com", "email_verified_at" => now(), "dept" => "DNB", "noabsen" => null, "password" => Hash::make('4dn4n'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 10, "name" => "Tatang", "email" => "tatang@mail.com", "email_verified_at" => now(), "dept" => "DNB", "noabsen" => null, "password" => Hash::make('dnbt4t4ng'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
        DB::table("users")->insert([ "id" => 11, "name" => "Zulkfili Febriansyah", "email" => "zulkifli@mail.com", "email_verified_at" => now(), "dept" => "DNB", "noabsen" => null, "password" => Hash::make('plkzul'), "remember_token" => Str::random(10), "bo" => false, "disabled" => false, ]); 
                
        
    }
}

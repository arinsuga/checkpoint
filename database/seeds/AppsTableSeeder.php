<?php

use Illuminate\Database\Seeder;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('apps')->delete();
        DB::table("apps")->insert([ "id" => 1, "code" => "dms", "name" => " Document Management System.", "description" => "Digital documentation system for Logistic and IT Department", ]); 
        DB::table("apps")->insert([ "id" => 2, "code" => "cpar", "name" => " Corrective/Preventive Action Request.", "description" => "Digital Corrective and Preventive Action", ]); 
        DB::table("apps")->insert([ "id" => 3, "code" => "tsk", "name" => " Task Control Management.", "description" => "Online task control management", ]); 
        DB::table("apps")->insert([ "id" => 4, "code" => "cpt", "name" => "Checkpoint ", "description" => "Online Checkpoint", ]); 
        
    }
}

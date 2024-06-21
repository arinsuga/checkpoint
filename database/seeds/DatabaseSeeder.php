<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

		// $this->call('UsersTableSeeder');
        // factory(App\User::class, 5)->create();

        $this->call('AppsTableSeeder');
        $this->call('AppUserTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('RoleUserTableSeeder');

        // $this->call('UsersTableSeeder');
        // $this->call('AppsTableSeeder');
        // $this->call('AppUserTableSeeder');
        // $this->call('RolesTableSeeder');
        // $this->call('RoleUserTableSeeder');

        //$this->call('AttendsTableSeeder');
    }
}

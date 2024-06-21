<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsersDummyTableSeeder extends Seeder
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

        //admin
        DB::table('users')->insert([
            //'id' => 1,
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.com',
            'email_verified_at' => now(),
            'dept' => null,
            'noabsen' => null,
            'password' => Hash::make('hadiprana'),
            'remember_token' => Str::random(10),
            'bo' => true,
        ]);

        //staff1
        DB::table('users')->insert([
            //'id' => 2,
            'name' => 'Admin 1',
            'email' => 'admin1@mail.com',
            'email_verified_at' => now(),
            'dept' => null,
            'noabsen' => null,
            'password' => Hash::make('hadiprana'),
            'remember_token' => Str::random(10),
            'bo' => true,
        ]);

        //staff2
        DB::table('users')->insert([
            //'id' => 3,
            'name' => 'Admin 2',
            'email' => 'admin2@mail.com',
            'email_verified_at' => now(),
            'dept' => null,
            'noabsen' => null,
            'password' => Hash::make('hadiprana'),
            'remember_token' => Str::random(10),
            'bo' => true,
        ]);

        //guest 1
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Guest 1',
            'email' => 'guest1@mail.com',
            'email_verified_at' => now(),
            'dept' => 'PERENCANAAN',
            'noabsen' => '0001',
            'password' => Hash::make('hadiprana'),
            'remember_token' => Str::random(10),
        ]);

        //guest 2
        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Guest 2',
            'email' => 'guest2@mail.com',
            'email_verified_at' => now(),
            'dept' => 'PERENCANAAN',
            'noabsen' => '0002',
            'password' => Hash::make('hadiprana'),
            'remember_token' => Str::random(10),
        ]);

        // //guest 2
        // DB::table('users')->insert([
        //     'id' => 6,
        //     'name' => 'Arin Suga',
        //     'email' => 'arinsuga@hadiprana.co.id',
        //     'email_verified_at' => now(),
        //     'dept' => 'IT',
        //     'noabsen' => '0003',
        //     'password' => Hash::make('hadiprana'),
        //     'remember_token' => Str::random(10),
        // ]);

        //dummy data
        //factory(App\User::class, 1000)->create();

    }
}

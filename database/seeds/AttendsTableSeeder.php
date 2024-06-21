<?php

use Illuminate\Database\Seeder;
use Arins\Facades\ConvertDate as Convert;

class AttendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Reset table
        DB::table('attends')->delete();

        $attend_dt1 = '18/02/2021';
        $checkin_time1 = '18/02/2021 08:00:00';
        $checkout_time1 = '18/02/2021 08:00:00';

        $attend_dt2 = '19/02/2021';
        $checkin_time2 = '19/02/2021 08:00:00';
        $checkout_time2 = '19/02/2021 08:00:00';

        //Absen arisuga@hadiprana.co.id
        DB::table('attends')->insert([
            //'id' => 1,
            'user_id' => 6,
            'attend_dt' => Convert::strDateToDate($attend_dt1),
            'checkin_time' => Convert::strDatetimeToDate($checkin_time1),
            'checkin_city' => 'jakarta',
            'checkout_time' => Convert::strDatetimeToDate($checkout_time1),
            'checkout_city' => 'jakarta',
            'created_at' => now(),
        ]);

        //Absen arisuga@hadiprana.co.id
        DB::table('attends')->insert([
            //'id' => 1,
            'user_id' => 6,
            'attend_dt' => Convert::strDateToDate($attend_dt2),
            'checkin_time' => Convert::strDatetimeToDate($checkin_time2),
            'checkin_city' => 'jakarta',
            'checkout_time' => Convert::strDatetimeToDate($checkout_time2),
            'checkout_city' => 'jakarta',
            'created_at' => now(),
        ]);

    }
}

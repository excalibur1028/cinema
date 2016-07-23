<?php

use Illuminate\Database\Seeder;
use App\Schedule;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'movie_id' => 1,
            'room_id'  => 1,
            'air_date' => Carbon\Carbon::now(),
            'start_time' => '10:00',
        ]);
    }
}

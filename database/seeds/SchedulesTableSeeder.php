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
            'air_date' => Carbon\Carbon::now(),
        ]);

        Schedule::create([
            'movie_id' => 1,
            'air_date' => Carbon\Carbon::now()->addHour(2),
        ]);

        Schedule::create([
            'movie_id' => 1,
            'air_date' => Carbon\Carbon::now()->addHour(4),
        ]);

        Schedule::create([
            'movie_id' => 1,
            'air_date' => Carbon\Carbon::now()->addHour(6),
        ]);

        Schedule::create([
            'movie_id' => 1,
            'air_date' => Carbon\Carbon::now()->addHour(8),
        ]);

        Schedule::create([
            'movie_id' => 2,
            'air_date' => Carbon\Carbon::now(),
        ]);

        Schedule::create([
            'movie_id' => 2,
            'air_date' => Carbon\Carbon::now()->addHour(2),
        ]);

        Schedule::create([
            'movie_id' => 2,
            'air_date' => Carbon\Carbon::now()->addHour(4),
        ]);

        Schedule::create([
            'movie_id' => 2,
            'air_date' => Carbon\Carbon::now()->addHour(6),
        ]);

        Schedule::create([
            'movie_id' => 2,
            'air_date' => Carbon\Carbon::now()->addHour(8),
        ]);

        Schedule::create([
            'movie_id' => 3,
            'air_date' => Carbon\Carbon::now(),
        ]);

        Schedule::create([
            'movie_id' => 3,
            'air_date' => Carbon\Carbon::now()->addHour(2),
        ]);

        Schedule::create([
            'movie_id' => 3,
            'air_date' => Carbon\Carbon::now()->addHour(4),
        ]);

        Schedule::create([
            'movie_id' => 3,
            'air_date' => Carbon\Carbon::now()->addHour(6),
        ]);

        Schedule::create([
            'movie_id' => 3,
            'air_date' => Carbon\Carbon::now()->addHour(8),
        ]);

        Schedule::create([
            'movie_id' => 4,
            'air_date' => Carbon\Carbon::now(),
        ]);

        Schedule::create([
            'movie_id' => 4,
            'air_date' => Carbon\Carbon::now()->addHour(2),
        ]);

        Schedule::create([
            'movie_id' => 4,
            'air_date' => Carbon\Carbon::now()->addHour(4),
        ]);

        Schedule::create([
            'movie_id' => 4,
            'air_date' => Carbon\Carbon::now()->addHour(6),
        ]);

        Schedule::create([
            'movie_id' => 4,
            'air_date' => Carbon\Carbon::now()->addHour(8),
        ]);
    }
}

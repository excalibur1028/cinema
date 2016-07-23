<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(RoomsTableSeeder::class);
         $this->call(MoviesTableSeeder::class);
         $this->call(SchedulesTableSeeder::class);

         // App\Schedule::truncate();
         // factory(App\Schedule::class, 10)->create();
    }
}

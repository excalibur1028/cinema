<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name' => 'Cinema 1',
        ]);

        Room::create([
            'name' => 'Cinema 2',
        ]);

        Room::create([
            'name' => 'Cinema 3',
        ]);

        Room::create([
            'name' => 'Cinema 4',
        ]);
    }
}

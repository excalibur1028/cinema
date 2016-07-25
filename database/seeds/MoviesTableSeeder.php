<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'title' => 'Batman v Superman: Dawn of Justice',
            'description' => 'The general public is concerned over having Superman on their planet and letting the Dark Knight - Batman - pursue the streets of Gotham. While this is happening, a power-phobic Batman tries to attack Superman.,Meanwhile Superman tries to settle on a decision, and Lex Luthor, the criminal mastermind and millionaire, tries to use his own advantages to fight the "Man of Steel.',
            'genre' =>  'Action / Adventure / Sci-Fi',
            'cast'  =>  'Jena Malone, Henry Cavill, Henry Cavill, Jeffrey Dean Morgan',
            'release_date' => Carbon\Carbon::now(),
            'room_id' => '1'
        ]);

        Movie::create([
            'title' => 'Barbershop: The Next Cut',
            'description' => "It's been more than 10 years since our last appointment at Calvin's Barbershop. Calvin and his longtime crew are still there, but the shop has undergone some major changes. Most noticeably, our once male-dominated sanctuary is now co-ed. The ladies bring their own flavor, drama and gossip to the shop challenging the fellas at every turn. Despite the good times and camaraderie within the shop, the surrounding community has taken a turn for the worse, forcing Calvin and our crew to come together to not only save the shop, but their neighborhood.",
            'genre' =>  'Comedy',
            'cast'  =>  'Ice Cube, Garcelle Beauvais, Nicki Minaj, Common',
            'release_date' => Carbon\Carbon::now(),
            'room_id' => '2'
        ]);

        Movie::create([
            'title' => 'Star Wars: The Force Awakens',
            'description' => '30 years after the defeat of Darth Vader and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8 droid that knows the whereabouts of the long lost Luke Skywalker. Rey, as well as a rogue stormtrooper and two smugglers, are thrown into the middle of a battle between the Resistance and the daunting legions of the First Order.',
            'genre' =>  'Action / Adventure / Fantasy / Sci-Fi / Thriller',
            'cast'  =>  'Mark Hamill, Harrison Ford, Carrie Fisher',
            'release_date' => Carbon\Carbon::now(),
            'room_id' => '3'
        ]);

        Movie::create([
            'title' => 'The Purge: Election Year',
            'description' => "As a young girl, Sen. Charlie Roan survived the annual night of lawlessness that took the lives of her family members. As a presidential candidate, Roan is determined to end the yearly tradition of blood lust once and for all. When her opponents hatch a deadly scheme, the senator finds herself trapped on the streets of Washington, D.C., just as the latest Purge gets underway. Now, it's up to Leo Barnes (Frank Grillo), her head of security, to keep her alive during the next 12 hours of mayhem.",
            'genre' =>  'Science fiction film/Thriller',
            'cast'  =>  'Frank Grillo, Elizabeth Mitchell, Mykelti Williamson',
            'release_date' => Carbon\Carbon::now(),
            'room_id' => '4'
        ]);
    }
}

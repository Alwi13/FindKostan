<?php

use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
            'name'  => 'Pikachu',
            'element_id' => '3',
            'picture' => 'pikachu.jpg',
            'gender'  => 'male',
            'description' => 'Pikachu is a short, chubby rodent Pokémon. It is covered in yellow fur with two horizontal brown stripes on its back. It has a small mouth, long, pointed ears with black tips, brown eyes, and two red circles on its cheeks.',
            'price'     => 12000,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('pokemons')->insert([
            'name'  => 'Rowlet',
            'element_id' => '5',
            'picture' => 'rowlet.png',
            'gender'  => 'female',
            'description' => 'This wary Pokémon uses photosynthesis to store up energy during the day, while becoming active at night.',
            'price'     => 12000,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('pokemons')->insert([
            'name'  => 'Bulbasaur',
            'element_id' => '3',
            'picture' => 'bulbasaur.png',
            'gender'  => 'male',
            'description' => 'Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun\'s rays, the seed grows progressively larger.',
            'price'     => 12000,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('pokemons')->insert([
            'name'  => 'Charmander',
            'element_id' => '2',
            'picture' => 'charmander.png',
            'gender'  => 'male',
            'description' => 'The flame that burns at the tip of its tail is an indication of its emotions. The flame wavers when Charmander is enjoying itself. If the Pokémon becomes enraged, the flame burns fiercely.',
            'price'     => 12000,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('pokemons')->insert([
            'name'  => 'Squirtle',
            'element_id' => '4',
            'picture' => 'squirtle.png',
            'gender'  => 'male',
            'description' => 'Squirtle\'s shell is not merely used for protection. The shell\'s rounded shape and the grooves on its surface help minimize resistance in water, enabling this Pokémon to swim at high speeds.',
            'price'     => 12000,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}

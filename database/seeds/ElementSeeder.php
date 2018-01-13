<?php

use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements')->insert([
            'element_name' => 'Normal'
        ]);

        DB::table('elements')->insert([
            'element_name' => 'Fire'
        ]);

        DB::table('elements')->insert([
            'element_name' => 'Electric'
        ]);

        DB::table('elements')->insert([
            'element_name' => 'Water'
        ]);

        DB::table('elements')->insert([
            'element_name' => 'Grass'
        ]);

        DB::table('elements')->insert([
            'element_name' => 'Ice'
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Fighting',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Poison',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Ground',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Flying',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Psychic',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Bug',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Rock',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Ghost',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Dragon',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Dark',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Steel',
        ]);

        DB::table('elements')->insert([
            'element_name'=> 'Fairy',
        ]);
    }
}

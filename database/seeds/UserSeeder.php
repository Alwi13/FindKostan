<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'     => 'ronald@mail.com',
            'password'  => bcrypt('ronald'),
            'picture'   => 'ronald.jpg',
            'gender'    => 'male',
            'date_of_birth' => \Carbon\Carbon::now(),
            'address'   => 'Serpong, Dekat tangerang Planet Pluto',
            'created_at'=> \Carbon\Carbon::now(),
            'updated_at'=> \Carbon\Carbon::now(),
        ]);
    }
}

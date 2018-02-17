<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'id' => 1,
            'name'    => 'African',
            'slug'    => 'african',
        ]);
        
        DB::table('genres')->insert([
            'id' => 2,
            'name'    => 'Asian',
            'slug'    => 'asian',
        ]);
        
        DB::table('genres')->insert([
            'id' => 3,
            'name'    => 'Avant-garde',
            'slug'    => 'avant-garde',
        ]);
        
        
    }
}

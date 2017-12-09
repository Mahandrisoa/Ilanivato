<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Group::firstOrCreate([
            'name' => 'ADMIN',
            'interlude' => 'Administration du siteweb'
        ]);
        App\Group::firstOrCreate([
            'name' => 'SEKOLY ALAHADY',
            'interlude' => 'Sampana SEKOLY ALAHADY'
        ]);
    }
}

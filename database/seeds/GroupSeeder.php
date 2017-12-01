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
        App\Group::created([
            'name' => 'ADMIN',
            'interlude' => 'Administration du siteweb'
        ]);
        App\Group::created([
            'name' => 'SEKOLY ALAHADY',
            'interlude' => 'Sampana SEKOLY ALAHADY'
        ]);

//        for ($i = 0; $i < 10; $i++)
//        {
//            \App\Group::create([
//                'name' => 'group'.$i,
//                'interlude' => 'interlude'. $i+1
//            ]);
//        }
    }
}

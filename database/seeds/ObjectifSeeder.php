<?php

use Illuminate\Database\Seeder;

class ObjectifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0 ;$i< 10;$i++){
            \Modules\Member\Entities\Objectif::create([
                'intitule' => 'Objectif numero : $i',
                'group_id' => 3
            ]);
        }
    }
}

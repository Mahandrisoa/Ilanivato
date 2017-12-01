<?php

use Illuminate\Database\Seeder;

class HistoriqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historiques')->insert([
            'date'=> new \DateTime(),
            'evenement' => 'Event1',
            'group_id' => 12
        ]);
    }
}

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
            'interlude' => 'Administration du siteweb',
            'directoryName' => 'ADMIN'
        ]);
        \Illuminate\Support\Facades\Storage::makeDirectory('/public/ADMIN/');
        App\Group::firstOrCreate([
            'name' => 'SEKOLY ALAHADY',
            'interlude' => 'SEKOLY ALAHADY',
            'directoryName' => 'SEKOLY_ALAHADY'
        ]);
        \Illuminate\Support\Facades\Storage::makeDirectory('/public/SEKOLY_ALAHADY/');
    }
}

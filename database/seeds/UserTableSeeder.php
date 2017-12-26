<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        App\User::create([
            'name' => 'Max',
            'email' => 'mahandrisoa@gmail.com',
            'password' => 'mahandrisoa',
            'group_id' => 1
        ]);
        \App\User::firstOrCreate([
            'name' => 'Sekoly alahady',
            'email' => 'sa@ilanivato.com',
            'password' => 'sekoly',
            'group_id' => 2
        ]);
    }
}

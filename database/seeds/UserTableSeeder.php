<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Max',
            'email' => 'mahandrisoa@gmail.com',
            'password' => 'mahandrisoa',
            'group_id' => 1
        ]);
//
//        for ($i = 0; $i < 10 ; $i++)
//        {
//            $k = $i;
//
//            App\User::create([
//                'name' => 'user'.$k,
//                'email' => 'user'.$i.'@gmail.com',
//                'password' => 'user'.$k,
//                'group_id' => rand(1,3)
//            ]);
//            ++$k;
//        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(GroupSeeder::class);
//         $this->call(UserTableSeeder::class);
//         $this->call(HistoriqueSeeder::class);
            $this->call(ObjectifSeeder::class);
//        $this->call(PostSeeder::class);
    }
}

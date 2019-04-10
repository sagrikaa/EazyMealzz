<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Admin',
            'email' => 'johnadmin@gmail.com',
            'password' => bcrypt('password'),
            'type' => 'a'
        ]);
    }
}

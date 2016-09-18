<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Peter Reginald', 'email' => 'peter@yourpcmatters.com', 'password' => bcrypt('password')],
            ['name' => 'Test User', 'email' => 'test@yourpcmatters.com', 'password' => bcrypt('test')],
        ];

        DB::table('users')->insert($users); 
    }
}

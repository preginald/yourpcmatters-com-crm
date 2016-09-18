<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            ['name' => 'The Reginald Family', 'email' => 'peter@reginald.com.au', 'phone' => '0401 573 619'],
            ['name' => 'Walt Disney Company', 'email' => 'accounts@disney.com', 'phone' => '8739 9382'],
            ['name' => 'Your PC Matters', 'email' => 'admin@yourpcmatters.com', 'phone' => '1300 307 970'],
            ['name' => 'Evil Corp', 'email' => 'satan@hell.com', 'phone' => '666 6669'],
            ['name' => 'Brown Bear Family', 'email' => 'bears@forest.com', 'phone' => '3784 9489'],
        ];

        DB::table('accounts')->insert($accounts);
    }
}

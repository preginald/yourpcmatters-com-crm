<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            ['firstname' => 'Peter', 'lastname' => 'Reginald', 'email' => 'peter@reginald.com.au', 'phone' => '0401 573 619'],
            ['firstname' => 'Tracey', 'lastname' => 'Reginald', 'email' => 'tracey@reginald.com.au', 'phone' => '0444 093 229'],
            ['firstname' => 'Peachey', 'lastname' => 'Reginald', 'email' => 'peachey@reginald.com.au', 'phone' => '0401 399 555'],
            ['firstname' => 'Perseus', 'lastname' => 'Reginald', 'email' => 'perceus@reginald.com.au', 'phone' => '0401 749 283'],
            ['firstname' => 'Donald', 'lastname' => 'Duck', 'email' => 'donaldduck@disney.com', 'phone' => '8739 2239'],
            ['firstname' => 'Daisy', 'lastname' => 'Duck', 'email' => 'daisyduck@disney.com', 'phone' => '9399 909 370'],
            ['firstname' => 'Satan', 'lastname' => 'Hellington', 'email' => 'satan@hell.com', 'phone' => '666 6669'],
            ['firstname' => 'Mama', 'lastname' => 'Bear', 'email' => 'mamabear@forest.com', 'phone' => '3784 9489'],
            ['firstname' => 'Papa', 'lastname' => 'Bear', 'email' => 'papabear@forest.com', 'phone' => '3784 9889'],
            ['firstname' => 'Baby', 'lastname' => 'Bear', 'email' => 'babybear@forest.com', 'phone' => '3784 9989'],
        ];

        DB::table('contacts')->insert($contacts);
    }
}

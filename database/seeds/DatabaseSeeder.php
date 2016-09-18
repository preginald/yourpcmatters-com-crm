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
        $this->call(UsersTableSeeder::class);
        $this->call(AccountTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(TicketTypesTableSeeder::class);
        $this->call(TicketStatusesTableSeeder::class);
        $this->call(TicketPrioritiesTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;

class TicketPrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket_priorities = [
            ['name' => 'Low'],
            ['name' => 'Normal'],
            ['name' => 'High'],
            ['name' => 'Urgent'],
        ];
        
        DB::table('ticket_priorities')->insert($ticket_priorities);
    }
}

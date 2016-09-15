<?php

use Illuminate\Database\Seeder;

class TicketTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket_types = [
            ['name' => 'Question'],
            ['name' => 'Incident'],
            ['name' => 'Problem'],
            ['name' => 'Task'],
        ];
        
        DB::table('ticket_types')->insert($ticket_types);
    }
}

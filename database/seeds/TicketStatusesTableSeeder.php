<?php

use Illuminate\Database\Seeder;

class TicketStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket_statuses = [
            ['name' => 'New'],
            ['name' => 'Open'],
            ['name' => 'Pending'],
            ['name' => 'On-hold'],
            ['name' => 'Solved'],
            ['name' => 'Closed'],
        ];
        
        DB::table('ticket_statuses')->insert($ticket_statuses);
    }
}

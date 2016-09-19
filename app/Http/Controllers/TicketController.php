<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ticket;
use App\TicketType;
use App\TicketPriority;
use App\TicketStatus;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the tickets
        $tickets = Ticket::paginate(5);

        // Return view and pass data
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load ticket types
        $ticket_types = TicketType::pluck('name','id');

        // load ticket priorities
        $ticket_priorities = TicketPriority::pluck('name','id');

        // load ticket types
        $ticket_statuses = TicketStatus::pluck('name','id');

        // redirect to create view
        return view('tickets.create')->with('ticket_types', $ticket_types)
            ->with('ticket_priorities', $ticket_priorities)
            ->with('ticket_statuses', $ticket_statuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->input()); */
        // Validate form input data
        $this->validate($request, [
            'account_id' => 'required|integer',
            'contact_id' => 'required|integer',
            'subject' => 'required|max:255',
            'description' => 'required',
            'type_id' => 'required|integer',
            'priority_id' => 'required|integer',
            'status_id' => 'required|integer'
        ]);

        // Store form input data in database
        $ticket = new Ticket;

        $ticket->account_id = $request->account_id;
        $ticket->contact_id = $request->contact_id;
        $ticket->subject = $request->subject; 
        $ticket->description = $request->description; 
        $ticket->type_id = $request->type_id; 
        $ticket->priority_id = $request->priority_id; 
        $ticket->status_id = $request->status_id; 
        
        $ticket->save();

        // Set flash data with success message
        $request->session()->flash('success', 'The ticket was successfully created!');

        // Redirect to show view with flash data
        return view('accounts.contacts.show', compact('account', 'contact'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

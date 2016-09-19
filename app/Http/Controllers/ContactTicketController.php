<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use App\Account;

use App\Ticket;
use App\TicketType;
use App\TicketPriority;
use App\TicketStatus;

class ContactTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($contact)
    {
        // Find contact 
        $contact = Contact::find($contact);
        
        // Find related accounts
        $accounts = $contact->accounts()->get(); 
        $accounts = $accounts->pluck('name', 'id');

        // Find ticket types
        $ticket_types = TicketType::pluck('name','id');

        // Find ticket priorities
        $ticket_priorities = TicketPriority::pluck('name','id');

        // Find ticket types
        $ticket_statuses = TicketStatus::pluck('name','id');
        
        // Redirect to ticket creation view
        return view('contacts.tickets.create', compact('contact', 'accounts', 'ticket_types', 'ticket_priorities', 'ticket_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

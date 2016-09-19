<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Account;
use App\Contact;
use App\Ticket;
use App\TicketType;
use App\TicketPriority;
use App\TicketStatus;

class AccountTicketController extends Controller
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
    public function create($account, $contact)
    {
        // Find account
        $account = Account::find($account);

        // Find contacts related to this account
        $contacts = $account->contacts()->get();
        $contacts = $contacts->pluck('ContactFullName', 'id');

        // Find ticket types
        $ticket_types = TicketType::pluck('name','id');

        // Find ticket priorities
        $ticket_priorities = TicketPriority::pluck('name','id');

        // Find ticket types
        $ticket_statuses = TicketStatus::pluck('name','id');
        
        // Redirect to ticket creation view
        return view('accounts.tickets.create', compact('account', 'contact', 'contacts', 'ticket_types', 'ticket_priorities', 'ticket_statuses'));
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

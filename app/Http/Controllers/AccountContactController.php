<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\Account;

class AccountContactController extends Controller
{
    public function show($accountId, $contactId)
    {
        // Find account from database
        $account = Account::find($accountId);

        // Find contact from database
        $contact = Contact::find($contactId);
    
        // Redirect to show view
        return view('accounts.contacts.show', compact('account', 'contact'));
    }

    public function showSearch($account)
    {
        // Redirect to search contact view
        return view('accounts.search.contact')
            ->with('account', $account);
    }

    public function search(Request $request)
    {
        // Retrieve account from database
        /* $account = Account::find($request->account); */
        $account = $request->account;

        // Perform search for matching contacts
        $contacts = Contact::where('firstname', 'LIKE', "%$request->firstname%")
            ->where('lastname', 'LIKE', "%$request->lastname%")
            ->get();

        // Redirect to search results view
        return view('accounts.search.results')
            ->with('account', $account)
            ->with('contacts', $contacts);
    }

    public function attach(Request $request)
    {
        // Store account to var
        $account = $request->input()['account'];

        // Find account from database
        $account = Account::find($account); 

        // Store selected contact_ids from input to array 
        $contact_ids = $request->input()['contact_id'];
        
        // Sync contacts to account
        $account->contacts()->syncWithoutDetaching($contact_ids);

        // Redirect to account show view
        return redirect()->route('accounts.show', $account);
    }
}

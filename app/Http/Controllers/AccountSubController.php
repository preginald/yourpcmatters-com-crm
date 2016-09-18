<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\Account;

class AccountSubController extends Controller
{
    public function showSearchContact($account)
    {
        // Redirect to search contact view
        return view('accounts.search.contact')
            ->with('account', $account);
    }

    public function searchContact(Request $request)
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

    public function attachContact(Request $request)
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
        /* return view('accounts.show') */
        /*     ->with('account', $account); */
        return redirect()->route('accounts.show', $account);
    }
}

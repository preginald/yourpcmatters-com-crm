<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the acounts
        $accounts = Account::paginate(5);

        // Return view and pass data
        return view('accounts.index', [
            'accounts' => $accounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // redirect to account creation view
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form input data
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        // Store form input data in database
        $account = new Account;

        $account->name = $request->name;
        $account->email = $request->email;

        $account->save();

        // Set flash data with success message
        $request->session()->flash('success', 'The account was successfully created!');

        // Redirect to show view with flash data
        return redirect()->route('accounts.show', $account->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find record from database
        $account = Account::find($id);

        // Redirect to show view
        return view('accounts.show')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find record from database and store as a var
        $account = Account::find($id);

        // Return edit view and pass in the var
        return view('accounts.edit')->with('account', $account);
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

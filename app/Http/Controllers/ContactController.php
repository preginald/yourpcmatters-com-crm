<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the contacts
        $contacts = Contact::all();
        
        return view('contacts.index',[
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate form input data
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:100',
            'email' => 'required|email'
        ]);
        
        // store form input data in database
        $contact = new Contact;

        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;

        $contact->save();

        // flash message
        $request->session()->flash('success', 'The contact was successfully saved!');

        // redirect to show view
        return redirect()->route('contacts.show', $contact->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contacts.show')->with('contact', $contact);
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
        $contact = Contact::find($id);

        // Return edit view and pass in the var
        return view('contacts.edit')->with('contact', $contact);
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
        // Validate form input data
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:100',
            'email' => 'required|email'
        ]);

        // Store form input data in database
        $contact = Contact::find($id);

        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');

        $contact->save();

        // Set flash data with success message
        $request->session()->flash('success', 'The contact was successfully updated!');
        
        // Redirect to show view with flash data
        return redirect()->route('contacts.show', $contact->id);
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

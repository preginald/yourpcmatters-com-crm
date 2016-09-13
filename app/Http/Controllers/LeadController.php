<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lead;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the leads
        $leads = Lead::paginate(5);

        // return a view and pass data
        return view('leads.index')->with('leads', $leads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate input data
        $this->validate($request, [
           'accountname' => 'required|max:255',
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // store form input data in database
        $lead = new Lead;

        $lead->accountname = $request->accountname;
        $lead->firstname = $request->firstname;
        $lead->lastname = $request->lastname;
        $lead->email = $request->email;
        $lead->phone = $request->phone;

        $lead->save();

        // flash message
        $request->session()->flash('success', 'The lead was successfully saved!');

        // redirect to show view
        return redirect()->route('leads.show', $lead->id);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find record from database
        $lead = Lead::find($id);

        // redirect to show view
        return view('leads.show')->with('lead', $lead);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find record from database and store as a var
        $lead = Lead::find($id);

        // return edit view and pass in the var
        return view('leads.edit')->with('lead', $lead);
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

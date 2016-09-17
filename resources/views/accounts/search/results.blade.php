@extends('layouts.app')

@section('title', '- Account Contacts')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Account Contacts Search Results
            </div>

            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    {!! Form::open(['route' => 'accounts.attach.contacts']) !!}
                    {!! Form::hidden('account', $account) !!} 
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ Form::checkbox('contact_id[]', $contact->id) }}</td>
                            <td>{{ $contact->firstname }} {{ $contact->lastname }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td><span class="pull-right"><a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    {{ Form::submit('Add Contact', ['class' => 'btn btn-success btn-block']) }} 
               {!! Form::close() !!}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

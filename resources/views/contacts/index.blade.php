@extends('layouts.app')

@section('title', '- Contacts')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Contacts
                <a href="{{ route('contacts.create') }}" class="pull-right">
                    Add New Contact
                </a>
            </div>

            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->firstname }} {{ $contact->lastname }}</td>
                            <td>{{ $contact->email }}</td>
                            <td><span class="pull-right"><a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

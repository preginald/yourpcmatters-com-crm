@extends('layouts.app')

@section('title', '- Contacts')

@section('content')
<div class="row">
    <div class="col-md-12">
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
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->firstname }} {{ $contact->lastname }}</a></td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td><span class="pull-right"><a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">{!! $contacts->links() !!}</div>
        </div>
    </div>
</div>
@endsection

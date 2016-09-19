@extends('layouts.app')

@section('title', '- Tickets')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Tickets
                <a href="{{ route('tickets.create') }}" class="pull-right">
                    Add New Ticket
                </a>
            </div>

            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Subject</th>
                            <th>Account</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Type</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->subject }}</a></td>
                            <td><a href="{{ route('accounts.show', $ticket->account->id) }}">{{ $ticket->account->name }}</a></td>
                            <td><a href="{{ route('accounts.contacts.show', [$ticket->account->id, $ticket->contact->id]) }}">{{ $ticket->contact->ContactFullName }}<a/></td>
                            <td>{{ $ticket->status->name }}</td>
                            <td>{{ $ticket->priority->name }}</td>
                            <td>{{ $ticket->type->name }}</td>
                            <td><span class="pull-right"><a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">{!! $tickets->links() !!}</div>
        </div>
    </div>
</div>
@endsection

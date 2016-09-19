    <div class="panel panel-default">
        <div class="panel-heading">Tickets
            <a href="{{ route('accounts.contacts.tickets.create', [$account, $contact]) }}" class="pull-right">
                Create Ticket
            </a>
        </div>

        <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Subject</th>
                            <th>Account</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($account->tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->subject }}</a></td>
                            <td><a href="{{ route('accounts.show', $ticket->account->id) }}">{{ $ticket->account->name }}</a> {{ $ticket->contact->ContactFullName }}</td>
                            <td>{{ $ticket->status->name }}</td>
                            <td><span class="pull-right"><a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>

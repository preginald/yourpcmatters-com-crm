    <div class="panel panel-default">
        <div class="panel-heading">Tickets
            <a href="{{ route('contacts.tickets.create', [$contact]) }}" class="pull-right">
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
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contact->tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->subject }}</a></td>
                            <td><a href="{{ route('accounts.show', $ticket->account->id) }}">{{ $ticket->account->name }}</a></td>
                            <td>{{ $ticket->status->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>

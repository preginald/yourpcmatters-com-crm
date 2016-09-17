    <div class="panel panel-default">
        <div class="panel-heading">Contacts
            <a href="{{ route('accounts.searchcontacts', ['account' => $account->id]) }}" class="pull-right">
                Link Contact
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
                @foreach ($account->contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->firstname }} {{ $contact->lastname }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td><span class="pull-right"><a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

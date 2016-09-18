@extends('layouts.app')

@section('title', '- Accounts')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Accounts
                <a href="{{ route('accounts.create') }}" class="pull-right">
                    Add New Account
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
                    @foreach ($accounts as $account)
                        <tr>
                            <td>{{ $account->id }}</td>
                            <td><a href="{{ route('accounts.show', $account->id) }}">{{ $account->name }}</a></td>
                            <td>{{ $account->email }}</td>
                            <td>{{ $account->phone }}</td>
                            <td><span class="pull-right"><a href="{{ route('accounts.show', $account->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">{!! $accounts->links() !!}</div>
        </div>
    </div>
</div>
@endsection

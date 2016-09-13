@extends('layouts.app')

@section('title', '- Leads')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Leads
                <a href="{{ route('leads.create') }}" class="pull-right">
                    Add New Lead
                </a>
            </div>

            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Account Name</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($leads as $lead)
                        <tr>
                            <td>{{ $lead->id }}</td>
                            <td>{{ $lead->accountname }}</td>
                            <td>{{ $lead->firstname }} {{ $lead->lastname }}</td>
                            <td>{{ $lead->email }}</td>
                            <td>{{ $lead->phone }}</td>
                            <td><span class="pull-right"><a href="{{ route('leads.show', $lead->id) }}" class="btn btn-sm btn-default">View</a> <a href="{{ route('leads.edit', $lead->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">{!! $leads->links() !!}</div>
        </div>
    </div>
</div>
@endsection

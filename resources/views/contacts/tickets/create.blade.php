@extends('layouts.app')

@section('title', '- Create New Ticket')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create New Ticket</div>

            <div class="panel-body">
                {!! Form::open(['route' => 'tickets.store']) !!}
                    <div class="form-group">
                        {{ Form::label('account_id', 'Account') }}
                        {{ Form::select('account_id', $accounts, NULL, ['class' => 'form-control']) }}
                    </div>                        
                    <div class="form-group">
                        {{ Form::label('contact_id', 'Contact') }}
                        {{ Form::select('contact_id', [$contact->id => $contact->ContactFullName], NULL, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('type_id', 'Type') }}
                        {{ Form::select('type_id', $ticket_types, NULL, ['class' => 'form-control']) }}
                    </div>                        
                    <div class="form-group">
                        {{ Form::label('priority_id', 'Priority') }}
                        {{ Form::select('priority_id', $ticket_priorities, '2', ['class' => 'form-control']) }}
                    </div>                        
                    <div class="form-group">
                        {{ Form::label('statu_id', 'Status') }}
                        {{ Form::select('status_id', $ticket_statuses, NULL, ['class' => 'form-control']) }}
                    </div>                        
                    <div class="form-group">
                        {{ Form::label('subject', 'Ticket Name') }}
                        {{ Form::text('subject', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                    </div>                        
                   {{ Form::submit('Create Ticket', ['class' => 'btn btn-success btn-block']) }} 
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

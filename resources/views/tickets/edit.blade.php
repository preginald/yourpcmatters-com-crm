@extends('layouts.app')

@section('title', '- Edit Ticket')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Ticket</div>
                <div class="panel-body">
                    {!! Form::model($ticket, ['method' => 'PATCH', 'route' => ['tickets.update', $ticket->id]]) !!}
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{ Form::label('type_id', 'Type') }}
                                    {{ Form::select('type_id', $ticket_types, $ticket->type_id, ['class' => 'form-control']) }}
                                </div>                        
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{ Form::label('status_id', 'Status') }}
                                    {{ Form::select('status_id', $ticket_statuses, $ticket->status_id, ['class' => 'form-control']) }}
                                </div>                        
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{ Form::label('priority_id', 'Priority') }}
                                    {{ Form::select('priority_id', $ticket_priorities, $ticket->priority_id, ['class' => 'form-control']) }}
                                </div>                        
                            </div>
                        </div>
                            <div class="form-group">
                                {!! Html::linkRoute('tickets.show', 'Cancel', [$ticket->id], ['class' => "btn btn-default"]) !!}
                                {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
                            </div>
                    {!! Form::close() !!}
                <div class="row">
                    <div class="col-sm-12">
                        <dl class="dl">
                            <dt>Subject:</dt>
                            <dd>{{ $ticket->subject }}</dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
                <div class="row">
                    <div class="col-sm-12">
                        <dl class="dl">
                            <dt>Description:</dt>
                            <dd>{{ $ticket->description }}</dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
                </div>

            </div>

        </div>
        
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created:</dt>
                    <dd>{{ $ticket->created_at }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Updated:</dt>
                    <dd>{{ $ticket->updated_at }}</dd>
                </dl>
        

</div>
@endsection

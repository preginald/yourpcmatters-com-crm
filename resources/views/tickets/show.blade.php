@extends('layouts.app')

@section('title', '- Show Ticket')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Ticket Details</h4>
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('tickets.edit', 'Edit', [$ticket->id], ['class' => "btn btn-default pull-right"]) !!}
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Type:</dt>
                            <dd>{{ $ticket->type->name }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Status:</dt>
                            <dd>{{ $ticket->status->name }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Priority:</dt>
                            <dd>{{ $ticket->priority->name }}</dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
                <div class="row">
                    <div class="col-sm-6">
                        <dl class="dl">
                            <dt>Account:</dt>
                            <dd><a href="{{ route('accounts.show', $ticket->account->id) }}">{{ $ticket->account->name }}</a></dd>
                        </dl>
                    </div>
                    <div class="col-sm-6">
                        <dl class="dl">
                            <dt>Name:</dt>
                            <dd><a href="{{ route('accounts.contacts.show', [$ticket->account->id, $ticket->contact->id]) }}">{{ $ticket->contact->ContactFullName }}</a></dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
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
            </div><!-- end of panel-body --> 
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-5">
                            <strong>Created:</strong>
                            <span>{{ $ticket->created_at->formatLocalized('%R %a %e %b %Y') }}</span>
                    </div>
                    <div class="col-sm-5">
                            <strong>Updated:</strong>
                            <span>{{ $ticket->updated_at->formatLocalized('%R %a %e %b %Y') }}</span>
                    </div>
                    <div class="col-sm-2">
                        {!! Form::open(['route' => ['tickets.destroy', $ticket->id],'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => "btn btn-link btn-xs pull-right"]) !!}
                        {!! Form::close() !!}
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-footer -->
        </div><!-- end of panel --> 
        @include('comments.index')
    </div><!-- end of col-md-8 --> 
</div><!-- end of content row -->
@endsection

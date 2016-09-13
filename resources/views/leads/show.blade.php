@extends('layouts.app')

@section('title', '- Show New Lead')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Lead Details</h4>
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('leads.edit', 'Edit', [$lead->id], ['class' => "btn btn-default pull-right"]) !!}
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Account Name:</dt>
                            <dd>{{ $lead->accountname }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Account Type<dt>
                            <dd></dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt><dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
                <div class="row">
                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Name:</dt>
                            <dd>{{ $lead->firstname }} {{ $lead->lastname }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Email:</dt>
                            <dd>{{ $lead->email }}</dd>
                        </dl>
                    </div>

                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Phone:</dt>
                            <dd>{{ $lead->phone }}</dd>
                        </dl>
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-body --> 
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-5">
                        Created: {{ $lead->created_at }}
                    </div>
                    <div class="col-sm-5">
                        Updated: {{ $lead->updated_at }}
                    </div>
                    <div class="col-sm-2">
                        {!! Form::open(['route' => ['leads.destroy', $lead->id],'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => "btn btn-link btn-xs pull-right"]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div><!-- end of panel --> 
    </div><!-- end of col-md-8 --> 
</div><!-- end of content row -->
@endsection

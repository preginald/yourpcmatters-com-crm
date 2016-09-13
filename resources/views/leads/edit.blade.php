@extends('layouts.app')

@section('title', '- Edit Lead')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Lead</div>
                
                <div class="panel-body">
                    {!! Form::model($lead, ['method' => 'PATCH', 'route' => ['leads.update', $lead->id]]) !!}
                    <div class="form-group">
                        {{ Form::label('accountname', 'Account Name') }}
                        {{ Form::text('accountname', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('firstname', 'First Name') }}
                        {{ Form::text('firstname', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('lastname', 'Last Name') }}
                        {{ Form::text('lastname', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>                        
                    <div class="form-group">
                        {{ Form::label('phone', 'Phone') }}
                        {{ Form::text('phone', null, ['class' => 'form-control']) }}
                   </div>                        
                   <div class="form-group">
                        {!! Html::linkRoute('leads.show', 'Cancel', [$lead->id], ['class' => "btn btn-default"]) !!}
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
        
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created:</dt>
                    <dd>{{ $lead->created_at }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Updated:</dt>
                    <dd>{{ $lead->updated_at }}</dd>
                </dl>
        

</div>
@endsection

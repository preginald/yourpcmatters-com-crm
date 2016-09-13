@extends('layouts.app')

@section('title', '- Create New Lead')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create New Lead</div>
                    
            <div class="panel-body">
                {!! Form::open(['route' => 'leads.store']) !!}
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
                    {{ Form::submit('Create Lead', ['class' => 'btn btn-success btn-block']) }} 
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

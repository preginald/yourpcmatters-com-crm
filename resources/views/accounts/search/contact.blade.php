@extends('layouts.app')

@section('title', '- Search Contact')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Search Contact</div>

            <div class="panel-body">
                {!! Form::open(['route' => 'accounts.search.contacts']) !!}
                    {!! Form::hidden('account', $account) !!} 
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
                    {{ Form::submit('Search Contact', ['class' => 'btn btn-success btn-block']) }} 
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

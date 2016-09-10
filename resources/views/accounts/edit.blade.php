@extends('layouts.app')

@section('title', '- Edit Account')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Account</div>
                
                <div class="panel-body">
                    {!! Form::model($account, ['method' => 'PATCH', 'route' => ['accounts.update', $account->id]]) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Account Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
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
                        {!! Html::linkRoute('accounts.show', 'Cancel', [$account->id], ['class' => "btn btn-default"]) !!}
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
                    <dd>{{ $account->created_at }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Updated:</dt>
                    <dd>{{ $account->updated_at }}</dd>
                </dl>
        

</div>
@endsection

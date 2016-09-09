@extends('layouts.app')

@section('title', '- Edit Contact')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Contact</div>
                
                <div class="panel-body">
                    {!! Form::model($contact, ['method' => 'PATCH', 'route' => ['contacts.update', $contact->id]]) !!}
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
                        {!! Html::linkRoute('contacts.show', 'Cancel', [$contact->id], ['class' => "btn btn-default"]) !!}
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
                    <dd>{{ $contact->created_at }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Updated:</dt>
                    <dd>{{ $contact->updated_at }}</dd>
                </dl>
        

</div>
@endsection

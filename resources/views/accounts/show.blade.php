@extends('layouts.app')

@section('title', '- Show New Account')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Basic Details</div>
                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <dl class="dl">
                                <dt>Name:</dt>
                                <dd>{{ $account->name }}</dd>
                            </dl>
                        </div>

                        <div class="col-sm-4">
                            <dl class="dl">
                                <dt>Email:</dt>
                                <dd>{{ $account->email }}</dd>
                            </dl>
                        </div>

                        <div class="col-sm-4">
                            <dl class="dl">
                                <dt>Phone:</dt>
                                <dd>{{ $account->phone }}</dd>
                            </dl>
                        </div>
                    </div>
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
        
            <hr>
            
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('accounts.edit', 'Edit', [$account->id], ['class' => "btn btn-primary btn-block"]) !!}
                </div> 

                <div class="col-sm-6">
                    {!! Form::open(['route' => ['accounts.destroy', $account->id],'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => "btn btn-danger btn-block"]) !!}
                    {!! Form::close() !!}
                </div> 

</div>
@endsection

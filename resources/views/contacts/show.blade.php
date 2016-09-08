@extends('layouts.app')

@section('title', '- Show New Contact')

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
                                <dd>{{ $contact->firstname }} {{ $contact->lastname }}</dd>
                            </dl>
                        </div>

                        <div class="col-sm-4">
                            <dl class="dl">
                                <dt>Email:</dt>
                                <dd>{{ $contact->email }}</dd>
                            </dl>
                        </div>

                        <div class="col-sm-4">
                            <dl class="dl">
                                <dt>Phone:</dt>
                                <dd>{{ $contact->phone }}</dd>
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
                <dd>{{ $contact->created_at }}</dd>
            </dl>
            
            <dl class="dl-horizontal">
                <dt>Updated:</dt>
                <dd>{{ $contact->updated_at }}</dd>
            </dl>
        
            <hr>
            
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('contacts.edit', 'Edit', [$contact->id], ['class' => "btn btn-primary btn-block"]) !!}
                </div> 

                <div class="col-sm-6">
                    {!! Html::linkRoute('contacts.destroy', 'Delete', [$contact->id], ['class' => "btn btn-danger btn-block"]) !!}
                </div> 

</div>
@endsection

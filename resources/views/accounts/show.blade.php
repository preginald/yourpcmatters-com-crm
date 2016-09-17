@extends('layouts.app')

@section('title', '- Show New Account')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Account Details</h4>
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('accounts.edit', 'Edit', [$account->id], ['class' => "btn btn-default pull-right"]) !!}
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <dl class="dl">
                            <dt>Name:</dt
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
                </div><!-- end of row -->
            </div><!-- end of panel-body -->
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-5">
                        Created: {{ $account->created_at }}
                    </div>
                    <div class="col-sm-5">
                        Updated: {{ $account->updated_at }}
                    </div>
                    <div class="col-sm-2">
                    {!! Form::open(['route' => ['accounts.destroy', $account->id],'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => "btn btn-link btn-xs pull-right"]) !!}
                    {!! Form::close() !!}
                    </div>
                </div><!-- end of row -->
            </div><!-- end of panel-footer -->
        </div><!-- end of panel -->
        @include('accounts.partials.contacts');
    </div><!-- end of col-md-8 -->
</div><!-- end of row -->
@endsection

@extends('layouts.backend.app')

@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-body row">
            @include('backend.acl.' . $module . '.form')
        </div>
        <div class="card-footer">
            {{ Form::submit(__('common.submit'), ['class' => 'btn btn-primary mr-2']) }}
            {{ Form::reset(__('common.reset'), ['class' => 'btn btn-secondary']) }}
        </div>
    </div>
@endsection


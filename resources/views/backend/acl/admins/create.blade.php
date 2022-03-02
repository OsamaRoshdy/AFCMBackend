@extends('layouts.backend.app')
@section('styles')
    <link href="{{ asset('backend/plugins/fileinput/css/fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
        <div class="card card-custom gutter-b example example-compact">
            {{ Form::open(['route' => 'dashboard.' . $module . '.store', 'files' => true,'id' => "kt_form"]) }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            @include('backend.shared.forms.status_input')
                            @include('backend.acl.' . $module . '.form')
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
@endsection

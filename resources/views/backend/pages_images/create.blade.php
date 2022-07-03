@extends('layouts.backend.app')
@section('content')
        <div class="card card-custom gutter-b example example-compact">
            {{ Form::open(['route' => 'dashboard.' . $module . '.store', 'id' => "kt_form", 'files' => true]) }}
                <div class="card-body ">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
\                            @include('backend.' . $module . '.form')
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
@endsection

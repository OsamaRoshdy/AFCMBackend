@extends('layouts.backend.app')

@section('content')
    <div class="card card-custom gutter-b example example-compact">
        {!! Form::model($FAQ,['route'=> ['dashboard.' . $module .'.update', $FAQ->id], 'method'=>'patch', 'id' => "kt_form"]) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    @if($FAQ->id !== 1)
                        @include('backend.shared.forms.status_input')
                    @endif
                    @include('backend.' . $module . '.form')
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection


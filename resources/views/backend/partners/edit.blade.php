@extends('layouts.backend.app')

@section('content')
    <div class="card card-custom gutter-b example example-compact">
        {!! Form::model($partner,['route'=> ['dashboard.' . $module .'.update', $partner->id], 'method'=>'patch', 'id' => "kt_form", 'files' => true]) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    @include('backend.shared.forms.status_input')
                    @include('backend.shared.forms.status_input', ['name' => 'show_in_home'])
                    @include('backend.shared.forms.status_input', ['name' => 'show_in_footer'])
                    @include('backend.' . $module . '.form', ['update' => true])
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection


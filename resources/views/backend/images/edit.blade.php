@extends('layouts.backend.app')

@section('content')
    <div class="card card-custom gutter-b example example-compact">
        {!! Form::model($media,['route'=> ['dashboard.' . $module .'.update', $media->id], 'method'=>'patch', 'id' => "kt_form", 'files' => true]) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    @include('backend.shared.forms.status_input')
                    @include('backend.' . $module . '.form', ['update' => true])
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-body">
            @foreach($media->images as $image)
                <div class="image-input image-input-outline image-input-changed" id="kt_user_edit_avatar">
                    <div class="image-input-wrapper" style="background-image: url('{{ $image->image }}');"></div>
                    {{ Form::open(['route' => ['dashboard.media.deleteImg', $image->id], 'method' => 'delete']) }}
                    <button type="submit" class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Delete Image">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </button>
                    {{ Form::close() }}
                </div>
            @endforeach
        </div>
    </div>
@endsection


<div class="form-group row">
    {{ Form::label('name_ar', __('common.name_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
    {{ Form::text('name_ar',old('name_ar'), ['class' => 'form-control', 'id' => 'name_ar', 'placeholder' => __('common.name_ar')]) }}
    @if ($errors->has("name_ar"))
        <span class="form-text text-danger">{{$errors->first('name_ar')}}</span>
    @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('name_en', __('common.name_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
    {{ Form::text('name_en',old('name_en'), ['class' => 'form-control', 'id' => 'name_en', 'placeholder' => __('common.name_en')]) }}
    @if ($errors->has("name_en"))
        <span class="form-text text-danger">{{$errors->first('name_en')}}</span>
    @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('description_ar', __('common.description_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::textarea('description_ar',old('description_ar'), ['class' => 'form-control editor', 'id' => 'description_ar', 'placeholder' => __('common.description_ar')]) }}
        @if ($errors->has("description_ar"))
            <span class="form-text text-danger">{{$errors->first('description_ar')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('description_en', __('common.description_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::textarea('description_en',old('description_en'), ['class' => 'form-control editor', 'id' => 'description_en', 'placeholder' => __('common.name_en')]) }}
        @if ($errors->has("description_en"))
            <span class="form-text text-danger">{{$errors->first('description_en')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('sort', __('common.sort'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::number('sort',old('sort'), ['class' => 'form-control', 'id' => 'sort', 'placeholder' => __('common.sort')]) }}
        @if ($errors->has("sort"))
            <span class="form-text text-danger">{{$errors->first('sort')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('type', __('common.type'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('type',[ 1 =>'National',  2 =>'InterNational'],old('type'), ['class' => 'form-control search', 'id' => 'type', 'placeholder' => __('common.type')]) }}
        @if ($errors->has("type"))
            <span class="form-text text-danger">{{$errors->first('type')}}</span>
        @endif
    </div>
</div>


@include('backend.shared.forms.image_input', ['oldImage' => $update ?? null ? $partner->image : null])


@section('styles')

    <link href="{{ asset('backend/plugins/fileinput/css/fileinput.css') }}" rel="stylesheet" type="text/css" />

@endsection



@section('scripts')
    @include('layouts.backend.includes.tinyMCE_config')

    <script src="{{ asset('backend/plugins/fileinput/js/fileinput.js') }}"></script>
@endsection

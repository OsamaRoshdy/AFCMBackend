<div class="form-group row">
    {{ Form::label('title_ar', __('common.title_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('title_ar',old('title_ar'), ['class' => 'form-control', 'id' => 'title_ar', 'placeholder' => __('common.title_ar')]) }}
        @if ($errors->has("title_ar"))
            <span class="form-text text-danger">{{$errors->first('title_ar')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('title_en', __('common.title_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('title_en',old('title_en'), ['class' => 'form-control', 'id' => 'title_en', 'placeholder' => __('common.title_en')]) }}
        @if ($errors->has("title_en"))
            <span class="form-text text-danger">{{$errors->first('title_en')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('description_ar', __('common.description_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('description_ar',old('description_ar'), ['class' => 'form-control', 'id' => 'description_ar', 'placeholder' => __('common.description_ar')]) }}
        @if ($errors->has("description_ar"))
            <span class="form-text text-danger">{{$errors->first('description_ar')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('description_en', __('common.description_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('description_en',old('description_en'), ['class' => 'form-control', 'id' => 'description_en', 'placeholder' => __('common.description_en')]) }}
        @if ($errors->has("title_en"))
            <span class="form-text text-danger">{{$errors->first('description_en')}}</span>
        @endif
    </div>
</div>


<div class="form-group row">
    {{ Form::label('content_ar', __('common.content_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::textarea('content_ar', old('content_ar'), ['class' => 'form-control editor form-control', 'id'=> 'content_ar']) }}
        @if ($errors->has("content_ar"))
            <span class="form-text text-danger">{{$errors->first('content_ar')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('content_en', __('common.content_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::textarea('content_en', old('content_en'), ['class' => 'form-control editor form-control', 'id'=> 'content_en']) }}
        @if ($errors->has("content_en"))
            <span class="form-text text-danger">{{$errors->first('content_en')}}</span>
        @endif
    </div>
</div>


@include('backend.shared.forms.image_input', ['oldImage' => $update ?? null ? $block->image : null])

@include('backend.shared.forms.multi_image_input')

@section('styles')
    <link href="{{ asset('backend/plugins/fileinput/css/fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('scripts')
    @include('layouts.backend.includes.tinyMCE_config')
    <script src="{{ asset('backend/plugins/fileinput/js/fileinput.js') }}"></script>

@endsection

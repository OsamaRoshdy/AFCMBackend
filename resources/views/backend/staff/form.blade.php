<div class="form-group row">
    {{ Form::label('full_name_ar', __('common.full_name_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
    {{ Form::text('full_name_ar',old('full_name_ar'), ['class' => 'form-control', 'id' => 'full_name_ar', 'placeholder' => __('common.full_name_ar')]) }}
    @if ($errors->has("full_name_ar"))
        <span class="form-text text-danger">{{$errors->first('full_name_ar')}}</span>
    @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('full_name_en', __('common.full_name_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('full_name_en',old('full_name_en'), ['class' => 'form-control', 'id' => 'full_name_en', 'placeholder' => __('common.full_name_en')]) }}
        @if ($errors->has("full_name_en"))
            <span class="form-text text-danger">{{$errors->first('full_name_en')}}</span>
        @endif
    </div>
</div>

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
    {{ Form::label('sort', __('common.sort'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::number('sort',old('sort'), ['class' => 'form-control', 'id' => 'sort', 'placeholder' => __('common.sort')]) }}
        @if ($errors->has("sort"))
            <span class="form-text text-danger">{{$errors->first('sort')}}</span>
        @endif
    </div>
</div>



@include('backend.shared.forms.image_input', ['oldImage' => $update ?? null ? $staff->image : null])


@section('styles')

    <link href="{{ asset('backend/plugins/fileinput/css/fileinput.css') }}" rel="stylesheet" type="text/css" />

@endsection



@section('scripts')
    <script src="{{ asset('backend/plugins/fileinput/js/fileinput.js') }}"></script>
@endsection

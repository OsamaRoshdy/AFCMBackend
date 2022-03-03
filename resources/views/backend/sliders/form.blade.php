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
    {{ Form::text('description_en',old('description_en'), ['class' => 'form-control', 'id' => 'description_en', 'placeholder' => __('common.name_en')]) }}
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
    {{ Form::label('slider_group_id', __('common.mainPage'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('slider_group_id',$sliderGroups,old('slider_group_id'), ['class' => 'form-control search', 'id' => 'slider_group_id', 'placeholder' => __('common.select')]) }}
        @if ($errors->has("slider_group_id"))
            <span class="form-text text-danger">{{$errors->first('slider_group_id')}}</span>
        @endif
    </div>
</div>




@include('backend.shared.forms.image_input', ['oldImage' => $update ?? null ? $slider->image : null])


@section('styles')

    <link href="{{ asset('backend/plugins/fileinput/css/fileinput.css') }}" rel="stylesheet" type="text/css" />

@endsection



@section('scripts')
    <script src="{{ asset('backend/plugins/fileinput/js/fileinput.js') }}"></script>
@endsection

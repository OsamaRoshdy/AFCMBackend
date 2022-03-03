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
    {{ Form::label('sort', __('common.sort'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::number('sort',old('sort'), ['class' => 'form-control', 'id' => 'sort', 'placeholder' => __('common.sort')]) }}
        @if ($errors->has("sort"))
            <span class="form-text text-danger">{{$errors->first('sort')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('count', __('common.count'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::number('count',old('count'), ['class' => 'form-control', 'id' => 'count', 'placeholder' => __('common.count')]) }}
        @if ($errors->has("count"))
            <span class="form-text text-danger">{{$errors->first('count')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('icon', __('common.icon'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('icon',old('icon'), ['type' => 'button','class' => 'form-control icp demo btn btn-default dropdown-toggle iconpicker-component', 'id' => 'sort', 'placeholder' => __('common.sort'), 'data-selected'=>"graduation-cap", 'data-toggle'=>"dropdown" , 'autocomplete' => false]) }}
        <i class="fa fa-fw"></i>
        <span class="caret"></span>
        <div class="dropdown-menu"></div>
        @if ($errors->has("icon"))
            <span class="form-text text-danger">{{$errors->first('icon')}}</span>
        @endif
    </div>
</div>
<div class="btn-group">



</div>


@section('styles')
    <link href="{{ asset('backend/plugins/iconpicker/dist/css/fontawesome-iconpicker.min.css') }}" rel="stylesheet">
@endsection
@section('scripts')
    <script src="{{asset('backend/plugins/iconpicker/dist/js/fontawesome-iconpicker.js')}}"></script>

    <script>
        $('.icon').iconpicker();
        $('.demo').iconpicker();

    </script>
@endsection

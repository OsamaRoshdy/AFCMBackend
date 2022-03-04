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

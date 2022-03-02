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

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
    {{ Form::label('url', __('common.video_url'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('url',old('url'), ['class' => 'form-control', 'id' => 'url', 'placeholder' => __('common.url')]) }}
        @if ($errors->has("url"))
            <span class="form-text text-danger">{{$errors->first('url')}}</span>
        @endif
    </div>
</div>

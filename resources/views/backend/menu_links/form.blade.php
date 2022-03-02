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
    {{ Form::label('country', __('common.main_page'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('main_page_id',$mainPages,old('main_page_id'), ['class' => 'form-control search', 'id' => 'main_page', 'placeholder' => __('common.select')]) }}
        @if ($errors->has("main_page_id"))
            <span class="form-text text-danger">{{$errors->first('main_page_id')}}</span>
        @endif
    </div>
</div>

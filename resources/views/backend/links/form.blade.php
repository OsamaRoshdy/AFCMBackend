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
    {{ Form::text('sort',old('sort'), ['class' => 'form-control', 'id' => 'sort', 'placeholder' => __('common.sort')]) }}
    @if ($errors->has("sort"))
        <span class="form-text text-danger">{{$errors->first('sort')}}</span>
    @endif
    </div>
</div>
<div class="form-group row">
    {{ Form::label('country', __('common.link'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('link_id',$links,old('link_id'), ['class' => 'form-control search', 'id' => 'link_id', 'placeholder' => __('common.select')]) }}
        @if ($errors->has("link_id"))
            <span class="form-text text-danger">{{$errors->first('link_id')}}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {{ Form::label('country', __('common.page'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('page_id',$pages,old('main_page_id'), ['class' => 'form-control search', 'id' => 'page_id', 'placeholder' => __('common.select')]) }}
        @if ($errors->has("page_id"))
            <span class="form-text text-danger">{{$errors->first('page_id')}}</span>
        @endif
    </div>
</div>

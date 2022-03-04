<div class="form-group row">
    {{ Form::label('name', __('common.name'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
    {{ Form::text('name',old('name'), ['class' => 'form-control', 'id' => 'name', 'placeholder' => __('common.name')]) }}
    @if ($errors->has("name"))
        <span class="form-text text-danger">{{$errors->first('name')}}</span>
    @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('mainPage', __('common.mainPage'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('main_page_id',$mainPages,old('main_page_id'), ['class' => 'form-control search', 'id' => 'main_page_id', 'placeholder' => __('common.select')]) }}
        @if ($errors->has("main_page_id"))
            <span class="form-text text-danger">{{$errors->first('main_page_id')}}</span>
        @endif
    </div>
</div>

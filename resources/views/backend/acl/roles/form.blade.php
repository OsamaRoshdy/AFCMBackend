<div class="form-group row">
    {{ Form::label('name', __('common.name'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) }}
        @if ($errors->has("name"))
            <span class="form-text text-danger">{{$errors->first('name')}}</span>
        @endif
    </div>
</div>


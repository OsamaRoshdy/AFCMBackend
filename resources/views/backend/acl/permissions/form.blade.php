    <div class="form-group row">
        {{ Form::label('name', __('common.name'), ['class' => 'col-sm-3']) }}
        <div class="col-sm-9">
            {{ Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) }}
            @if ($errors->has("name"))
                <span class="form-text text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {{ Form::label('guard_name', __('permissions.guard_name'), ['class' => 'col-sm-3']) }}
        <div class="col-sm-9">
            {{ Form::select('guard_name',['admin' => 'Admin', 'web' => 'Web'],old('guard_name'), ['class' => 'form-control search', 'id' => 'guard_name']) }}
            @if ($errors->has("guard_name"))
                <span class="form-text text-danger">{{$errors->first('guard_name')}}</span>
            @endif
        </div>
    </div>

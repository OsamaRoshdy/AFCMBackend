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
    {{ Form::label('email', __('admins.email'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email']) }}
        @if ($errors->has("email"))
            <span class="form-text text-danger">{{$errors->first('email')}}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {{ Form::label('password_confirmation', __('admins.role'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('role',$roles,old('role'), ['class' => 'form-control search', 'id' => 'password_confirmation']) }}
        @if ($errors->has("role"))
            <span class="form-text text-danger">{{$errors->first('role')}}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {{ Form::label('password', __('admins.password'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
        @if ($errors->has("password"))
            <span class="form-text text-danger">{{$errors->first('password')}}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    {{ Form::label('password_confirmation', __('admins.password_confirmation'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
        @if ($errors->has("password_confirmation"))
            <span class="form-text text-danger">{{$errors->first('password_confirmation')}}</span>
        @endif
    </div>
</div>



@php
    $name = $name ?? 'status';
@endphp
<div class="form-group row">
    {{ Form::label($name,__('common.' . $name) ,['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        <div class="radio-list">
            <label class="radio radio-outline radio-success">
                {{ Form::radio($name, 1, null,['checked'=>'checked']) }}
                <span></span>
                {{ __('common.enable')  }}
            </label>
            <label class="radio radio-outline radio-danger">
                {{ Form::radio($name, 0, null,[]) }}
                <span></span>
                {{ __('common.disable')   }}
            </label>
        </div>
    </div>
    @if ($errors->has($name))
        <span class="form-text text-danger">{{$errors->first($name)}}</span>
    @endif
</div>


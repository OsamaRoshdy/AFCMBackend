<div class="form-group row">
    {{ Form::label('status',__('common.status') ,['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        <div class="radio-list">
            <label class="radio radio-outline radio-success">
                {{ Form::radio('status', 1, null,['checked'=>'checked']) }}
                <span></span>
                {{ __('common.enable')  }}
            </label>
            <label class="radio radio-outline radio-danger">
                {{ Form::radio('status', 0, null,[]) }}
                <span></span>
                {{ __('common.disable')   }}
            </label>
        </div>
    </div>
    @if ($errors->has("status"))
        <span class="form-text text-danger">{{$errors->first('status')}}</span>
    @endif
</div>


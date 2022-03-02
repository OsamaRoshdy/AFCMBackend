
<div class="form-group row">
    {{ Form::label('images', __('common.images'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        <input id="input-b1" name="images[]" type="file" class="file" data-browse-on-zone-click="true" multiple>
        @if ($errors->has('images'))
            <span class="form-text text-danger">{{$errors->first('images')}}</span>
        @endif
    </div>
</div>



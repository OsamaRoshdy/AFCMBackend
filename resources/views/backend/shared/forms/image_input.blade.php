@php
    $name = $name ?? 'image_name';
@endphp

<div class="form-group row">
    {{ Form::label($name, __('common.' . $name), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        @if($oldImage ?? null)
            <br>
            <div class="symbol">
                <div class="symbol-label" style="background-image: url({{ $oldImage }})"></div>
            </div>
        @endif
        <input id="input-b1" name="{{ $name }}" type="file" class="file" data-browse-on-zone-click="true">
        @if ($errors->has($name))
            <span class="form-text text-danger">{{$errors->first($name)}}</span>
        @endif
    </div>
</div>



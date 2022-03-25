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
                @if(Route::currentRouteName() == 'dashboard.pages.edit')
                <a href="{{route('dashboard.blocks.deleteImage', $block->id)}}" class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Delete Image">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </a>
                @endif
            </div>
        @endif
        <input id="input-b1" name="{{ $name }}" type="file" class="file" data-browse-on-zone-click="true">
        @if ($errors->has($name))
            <span class="form-text text-danger">{{$errors->first($name)}}</span>
        @endif
    </div>
</div>



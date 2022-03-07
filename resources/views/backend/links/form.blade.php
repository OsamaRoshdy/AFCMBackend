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
    {{ Form::label('type', __('common.type'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('type',[ 1 =>'internal Link',  2 =>'external Link'],old('type'), ['class' => 'form-control search', 'id' => 'type', 'placeholder' => __('common.type')]) }}
        @if ($errors->has("type"))
            <span class="form-text text-danger">{{$errors->first('type')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('route', __('common.route'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::text('route',old('route'), ['class' => 'form-control', 'placeholder' => __('common.route')]) }}
        @if ($errors->has("route"))
            <span class="form-text text-danger">{{$errors->first('route')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('page', __('common.page'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('block_id',$pages,old('block_id'), ['class' => 'form-control search', 'id' => 'type', 'placeholder' => __('common.page')]) }}
        @if ($errors->has("block_id"))
            <span class="form-text text-danger">{{$errors->first('block_id')}}</span>
        @endif
    </div>
</div>





@section('scripts')
    <script>
        $('#type').change(function () {
            let type = this.value
            if (type == 1) {
                $('#blockDev').remove()
                appendInternal()
            }
            else if (type == 2) {
                $('#blockDev').remove()
            }
            else {
                $('#blockDev').remove()
            }
        })


    </script>
@endsection

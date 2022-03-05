<div class="form-group row">
    {{ Form::label('question_ar', __('common.question_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
    {{ Form::text('question_ar',old('question_ar'), ['class' => 'form-control', 'id' => 'question_ar', 'placeholder' => __('common.question_ar')]) }}
    @if ($errors->has("question_ar"))
        <span class="form-text text-danger">{{$errors->first('question_ar')}}</span>
    @endif
    </div>
</div>
<div class="form-group row">
    {{ Form::label('question_en', __('common.question_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
    {{ Form::text('question_en',old('question_en'), ['class' => 'form-control', 'id' => 'question_en', 'placeholder' => __('common.question_en')]) }}
    @if ($errors->has("question_en"))
        <span class="form-text text-danger">{{$errors->first('question_en')}}</span>
    @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('answer_ar', __('common.answer_ar'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::textarea('answer_ar',old('answer_ar'), ['class' => 'form-control', 'id' => 'answer_ar', 'placeholder' => __('common.answer_ar')]) }}
        @if ($errors->has("answer_ar"))
            <span class="form-text text-danger">{{$errors->first('answer_ar')}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    {{ Form::label('answer_en', __('common.answer_en'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::textarea('answer_en',old('answer_en'), ['class' => 'form-control', 'id' => 'answer_en', 'placeholder' => __('common.answer_en')]) }}
        @if ($errors->has("answer_en"))
            <span class="form-text text-danger">{{$errors->first('answer_en')}}</span>
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
    {{ Form::label('mainPages', __('common.mainPages'), ['class' => 'col-sm-3']) }}
    <div class="col-sm-9">
        {{ Form::select('mainPages[]',$mainPages,old('mainPages[]'), ['multiple' => true,'class' => 'form-control search', 'id' => 'mainPages']) }}
        @if ($errors->has("mainPages[]"))
            <span class="form-text text-danger">{{$errors->first('mainPages[]')}}</span>
        @endif
    </div>
</div>

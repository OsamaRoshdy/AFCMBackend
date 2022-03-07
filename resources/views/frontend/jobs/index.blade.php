@extends('layouts.frontend.app')


@section('content')
    <!-- Title Page -->
    <div class="page_title">
        <div class="row g-0">
            <div class="col-12">
                <div class="overlay">
                    <h1>{{ $job->title }}</h1>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <img src="{{ getSection('news_header')->image }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- Post Detils -->
    <div class="post_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="background: #e1e1e1;  border-radius: 25px; padding: 15px; " class="new_keywords">
                        <h3>{{ __('related_jobs') }}</h3>
                        <br>
                        @foreach($relatedJobs as $relatedJob)
                            <h5>
                                <a href="{{ url('jobs/'.$relatedJob->id) }}" class="dropdown-item double-chevron--before" style="color: black">{{$relatedJob->title}}</a>
                            </h5>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8"  style="  border-radius: 25px; padding: 15px; ">
                    <div class="col row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        @php
                                            $inputs = [
                                                    [
                                                        'name' => 'fullname',
                                                        'type' => 'text',
                                                    ],

                                                    [
                                                        'name' => 'name',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'dateOfBirth',
                                                        'type' => 'date',
                                                    ],
                                                    [
                                                        'name' => 'nationality',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'nationalID',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'passport',
                                                        'type' => 'number',
                                                    ],
                                                    [
                                                        'name' => 'residence',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'phone',
                                                        'type' => 'number',
                                                    ],
                                                    [
                                                        'name' => 'email',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'collegeAndUniversity',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'graduationEstimate',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'estimateOfMajor',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'dateOfBachelor',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'otherQualifications',
                                                        'type' => 'text',
                                                    ],
                                                    [
                                                        'name' => 'degreeSpecialization',
                                                        'type' => 'text',
                                                    ],
                                            ];
                                        @endphp

                                        <form method="post" action="{{ route('jobApply', $job->id) }}">
                                            {{csrf_field()}}
                                            @foreach($inputs as $input)
                                            <div class="form-group">
                                                <label for="{{$input['name']}}" class="@if ($errors->has($input['name'])) text-danger @endif">
                                                    {{__('frontend.'.$input['name'])}}
                                                    @if ($errors->has($input['name']))
                                                        <span class="form-text text-danger">*</span>
                                                    @endif
                                                </label>
                                                {{ Form::text($input['name'], old($input['name']), ['class' => 'form-control bg-hover-danger']) }}
                                                </br>
                                            </div>
                                            @endforeach
                                            <div class="mx-auto">
                                                <button id="contact" type="submit" class="btn text-right"  style="background: #d70000; color: white">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>

                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection


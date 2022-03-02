@extends('layouts.backend.app')

@section('content')
    {{ Form::model($role,['route' => ['dashboard.' . $module . '.storeAttachPermissions', $role], 'method'=>'patch','id' => "kt_form"]) }}
    <div class="card-body row">
        @foreach($permissionsGrouped as $group => $permissions)
            <div class="col-lg-6" style="margin-bottom: 10px">
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-rounded">
                                        <input type="checkbox" class="check{{ $group }}" id="check{{ $group }}">
                                        <span></span>
                                        <h3>{{ __('modules.' . $group)}}</h3>
                                    </label>
                                </div>

                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($permissions as $permission )
                                <div class="col-sm-3">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-rounded">
                                            {!! Form::checkbox('permissions[]', $permission->id, null,['class' => 'check' . $group] )!!}
                                            <span></span>
                                            {{ __('permissions.' . explode('_',$permission->name)[0])}}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    {{ Form::close() }}
@endsection
@section('scripts')
    <script>
        @foreach($permissionsGrouped as $group => $permissions)
            $("#check{{$group}}").click(function () {
                $(".check{{$group}}").prop('checked', $(this).prop('checked'));
            });
        @endforeach
    </script>
@endsection


@extends('layouts.backend.app')

@section('styles')
    <link href="{{ asset('backend/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


    <div class="card card-custom">
        <div class="card-body">
            {!! $html->table(['class'=>'table table-separate table-head-custom table-checkable'],true)!!}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="{{asset('backend/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('backend/js/pages/crud/datatables/search-options/advanced-search.js')}}"></script>
    <script src="{{asset('backend/js/pages/features/miscellaneous/sweetalert2.js')}}" type="text/javascript"></script>
    {!! $html->scripts() !!}
@endsection

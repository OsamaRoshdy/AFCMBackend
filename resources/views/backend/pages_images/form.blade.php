@include('backend.shared.forms.image_input', ['oldImage' => $update ?? null ? $block->image : null])

@section('styles')
    <link href="{{ asset('backend/plugins/fileinput/css/fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('scripts')
    @include('layouts.backend.includes.tinyMCE_config')
    <script src="{{ asset('backend/plugins/fileinput/js/fileinput.js') }}"></script>

@endsection

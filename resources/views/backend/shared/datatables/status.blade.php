@if($statusValue == 1)
<span class="label label-lg font-weight-bold label-light-success label-inline">
    {{ __('common.enable') }}
</span>
@else
<span class="label label-lg font-weight-bold label-light-danger label-inline">
    {{ __('common.disable') }}
</span>
@endif

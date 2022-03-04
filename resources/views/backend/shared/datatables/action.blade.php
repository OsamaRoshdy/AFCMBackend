@php
    $show = [];
    $disableEdit = [];
    $disableDelete = ['main_pages', 'menu_links', 'links', 'slider_groups'];
@endphp
<td nowrap="nowrap">
    <div class="dropdown dropdown-inline">
        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">
            <i class="la la-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <ul class="nav nav-hoverable flex-column">
                @if($module == 'roles')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.' . $module . '.attachPermissions', $model) }}">
                            <i class="nav-icon la la-plus-circle"></i>
                            <span class="nav-text">{{ __('roles.attach_permissions') }}</span>
                        </a>
                    </li>
                @endif
                @if(!in_array($module, $disableEdit))
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.' . $module . '.edit', $model) }}">
                        <i class="nav-icon la la-edit"></i>
                        <span class="nav-text">{{ __('common.edit') }}</span>
                    </a>
                </li>
                @endif
                @if(in_array($module, $show))
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.' . $module . '.show', $model) }}">
                        <i class="nav-icon la la-leaf"></i>
                        <span class="nav-text">{{ __('common.show') }}</span>
                    </a>
                </li>
                @endif
                @if(!in_array($module, $disableDelete))
                    <li class="nav-item">
                    <form method="POST" action="{{ route('dashboard.' . $module .'.destroy', $model) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="nav-link show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="nav-icon la la-trash-alt"></i>
                            {{ __('common.delete') }}
                        </a>
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</td>


<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            text: "Are you sure you want to delete this record?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>

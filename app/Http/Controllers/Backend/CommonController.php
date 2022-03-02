<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\TableIndex;
use Yajra\DataTables\Html\Builder;

class CommonController extends Controller
{
    use TableIndex;

    protected string $module;

    protected Builder $htmlBuilder;

    public function __construct(Builder $htmlBuilder)
    {
        $this->htmlBuilder = $htmlBuilder;
        $this->middleware('permission:list_' . $this->module.',admin')->only('index');
        $this->middleware('permission:create_' . $this->module.',admin')->only('create');
        $this->middleware('permission:update_' . $this->module.',admin')->only('edit');
        $this->middleware('permission:delete_' . $this->module.',admin')->only('destroy');
    }

}

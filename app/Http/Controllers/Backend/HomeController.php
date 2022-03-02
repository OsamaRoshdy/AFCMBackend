<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $module;

    public function __construct()
    {
        $this->module = 'dashboard';
    }

    public function index()
    {
        return view('backend.index')->with(['module' => $this->module]);
    }
}

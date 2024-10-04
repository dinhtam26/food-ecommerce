<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SlidersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(SlidersDataTable $dataTable)
    {
        return $dataTable->render('admin.slider.index');
    }
}

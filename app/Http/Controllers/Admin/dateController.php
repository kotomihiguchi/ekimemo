<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dateController extends Controller
{
    //
    public function add()
    {
        return view('admin.date.create');
    }

    public function create()
    {
        return redirect('admin/date/create');
    }

    public function edit()
    {
        return view('admin.date.edit');
    }

    public function update()
    {
        return redirect('admin/date/edit');
    }
}

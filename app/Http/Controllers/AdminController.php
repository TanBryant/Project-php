<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        return view('Admin.indexAdmin');
    }
    public function formAdd()
    {
        return view('Admin.pages.forms.basic_elements');
    }
}

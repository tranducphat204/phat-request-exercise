<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function post(Request $request)
    {
        return 'Name ' . ($request->input('name'))
            . '<br> UserName:  ' . ($request->input('username'))
            . '<br> Password: ' . ($request->input('password'));
    }
}

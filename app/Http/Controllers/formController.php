<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function form(Request $request)
    {
        if($request->isMethod('post')) {
            return redirect()->route('form');
        }
        return view('content.form');
    }
}
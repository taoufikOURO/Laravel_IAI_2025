<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view("students.create");
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}

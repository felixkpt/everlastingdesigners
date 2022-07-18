<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Employers', 'description' => 'Employers'];

        return view('employers/index', $data);
    }
}

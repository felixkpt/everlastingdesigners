<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Freelancers', 'description' => 'Freelancers'];

        return view('freelancers/index', $data);
    }
}

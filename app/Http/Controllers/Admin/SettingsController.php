<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() {

        $settings = Option::all();

        $data = ['settings' => $settings];

        return view('/admin/settings/index', $data);
    }
}

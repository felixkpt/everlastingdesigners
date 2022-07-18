<?php
namespace App\Http\Controllers;

use App\Settings\SiteInfo;
class HomeController extends Controller
{
    /** 
     * Our homepage method
     * @return Response
     */
    public function index() {
        $title = SiteInfo::title();
        $description = SiteInfo::description();
        $data = ['title' => $title, 'description' => $description, 'hide_sidebar' => true];
        return view('home/index', $data);
    }
}

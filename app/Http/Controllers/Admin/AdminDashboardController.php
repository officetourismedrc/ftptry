<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function index(){
        
        //return 'admin dashboa';
        return view('Admin.Admindashboard.main_content');
    }
}

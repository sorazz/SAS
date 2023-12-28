<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title'] = 'Dashboard';
        return view('admin.dashboard.index', $data);
    }

    public function contact(){
        $data['title'] = 'Contact';
        $data['models'] = Contact::orderBy('lname','desc')->paginate(10);
        return view('admin.dashboard.contact', $data);
    }
}

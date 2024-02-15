<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Services;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title'] = 'Dashboard';
        $data['project'] = Project::all()->count();
        $data['feature'] = Feature::all()->count();
        $data['service'] = Services::all()->count();
        return view('admin.dashboard.index', $data);
    }

    public function contact(){
        $data['title'] = 'Contact';
        $data['models'] = Contact::orderBy('lname','desc')->paginate(10);
        return view('admin.dashboard.contact', $data);
    }

    public function deleteContact(Request $request){
        Contact::where('id',$request->id)->delete();
        return back()->with('message', '<span>' . 'contact' . 'deleted '  . '</span>');
    }
}

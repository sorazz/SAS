<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;
use App\Models\SiteSetting;


class SettingController extends Controller
{
    private $controller = 'admin/site-setting';
    private $title = 'Site Setting';
    private $table = 'setting';
    private $update_form = 'admin.setting.index';

    public function index() {
        $data['title'] = $this->title;
        //bredcrumb
        $data['bredcrumb'] = 'Site Setting';
        $data['model'] = SiteSetting::find(1);
        return view($this->update_form, $data);
    }

    public function update(UpdateSettingRequest $request) {
       
        SiteSetting::updateModel($request);
        return redirect($this->controller)->with('message', '<span>1 ' . 'UPDATED' . '</span>');
    }
}

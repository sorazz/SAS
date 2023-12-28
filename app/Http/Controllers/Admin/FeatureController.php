<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Feature;
class FeatureController extends Controller
{
    private $controller = 'admin/feature';
    private $rpp = 10; //row per page //default-RPP
    private $title = 'Feature';
    private $table = 'feature';
    private $sort_by = 'title';
    private $sort_order = 'desc';
    private $listing_page = 'admin.feature.index';
    private $create_form = 'admin.feature.create';
    private $update_form = 'admin.feature.create';
    private $status = [
        '0' => '<span class="label label-danger">Inactive</span>',
        '1' => '<span class="label label-success">Active</span>',
    ];

    public function index(Request $request)
    {
        $data['title'] = $this->title;
        $data['status'] = $this->status;
        $data['bredcrumb'] = $this->title;
        if ($request->ajax()) {
            $data['models'] = Feature::orderBy($this->sort_by, $this->sort_order)
                ->where(function ($query) use ($request) {
                    $query->where('title', 'LIKE', '%' . $request->search . '%');
                })
                ->paginate($this->rpp);
            return response()->json([
                'data' => $data,
                'success' => true
            ]);
        } else {
            $data['models'] = Feature::orderBy($this->sort_by, $this->sort_order)
                ->paginate($this->rpp);
        }
        return view($this->listing_page, $data);
    }

    public function create()
    {
        $data['title'] = $this->title;
        //bredcrumb

        return view($this->create_form, $data);
    }

    public function store(Request $request)
    {
        Feature::createModel($request);
        return redirect($this->controller)->with('message', '<span>1 ' . 'CREATED' . '</span>');
    }

    public function edit($id)
    {
        $data['title'] = $this->title;

        //bredcrumb



        $data['model'] = Feature::find($id);
        return view($this->update_form, $data);
    }

    public function update(Request $request, $id)
    {

        Feature::updateModel($request, $id);
        return redirect($this->controller)->with('message', 'Service updated succssfully');
    }


    public function delete(Request $request)
    {
        $affected_models = Feature::deleteModel($request);
        return back()->with('message', '<span>' . $affected_models . 'deleted '  . '</span>');
    }
}

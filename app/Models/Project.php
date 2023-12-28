<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Image;
use File;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    public $upload = 'uploads/project/';
    protected $fillable = [
        'name','caption','description','image','slug','url','status'
    ];

    public static function createModel($request)
    {
        $model = new Project($request->all());
        $inputs =  $request->except(['_token']);
        if (isset($inputs['image'])) {
            $extension = $inputs['image']->getClientOriginalExtension();
            $image = Str::slug($inputs['name']) . time() . '.' . $extension;
            $inputs['image']->move($model->upload, $image);
            $model->image = $image;
        }

        $model->slug = Str::slug($inputs['name']);
        $model->name = Str::slug($inputs['name']);
        $model->caption = $inputs['caption'];
        $model->description = $inputs['description'];
        $model->url = $inputs['url'];
        $model->status = $inputs['status'];

        $model->save();
    }

    public static function updateModel($request,$id)
    {
        $inputs =  $request->except(['_token']);
        $model = Project::find($id);
        $model->fill($inputs);
        if (isset($inputs['image'])) {
            if ($model->image) {
                File::delete(public_path() . '/' . $model->upload . $model->image);
            }
            $extension = $inputs['image']->getClientOriginalExtension();
            $image = Str::slug($inputs['name']) . time() . '.' . $extension;
            $inputs['image']->move($model->upload, $image);
            $model->image = $image;
        } else if(isset($inputs['delete_image'])) {
            if ($model->image) {
                File::delete(public_path() . '/' . $model->upload . $model->image);
            }
            $model->image = '';
        }
       
      
        $model->slug = Str::slug($inputs['name']);
        $model->name = Str::slug($inputs['name']);
        $model->caption = $inputs['caption'];
        $model->description = $inputs['description'];
        $model->url = $inputs['url'];
        $model->status = $inputs['status'];
        $model->save();
    }

    public static function deleteModel($request)
    {
        $id = $request->id;
        $models = Project::where('id',$id)->get(array('id', 'image'));
        foreach ($models as $m) {
            File::delete(public_path() . '/' . $m->upload . $m->image);
        }
        return Project::where('id', $id)->delete();
    }
}

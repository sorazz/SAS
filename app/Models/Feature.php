<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Image;
use File;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'feature';
    public $upload = 'uploads/feature/';
    public $bgimage = 'uploads/feature/bg/';
    protected $fillable = [
        'title','caption','description','image','bg_image','status','slug'
    ];

    public static function createModel($request)
    {
        $model = new Feature($request->all());
        $inputs =  $request->except(['_token']);
        if (isset($inputs['image'])) {
            $extension = $inputs['image']->getClientOriginalExtension();
            $image = Str::slug($inputs['title']) . time() . '.' . $extension;
            $inputs['image']->move($model->upload, $image);
            $model->image = $image;
        }
        if (isset($inputs['bg_image'])) {
            $extension = $inputs['bg_image']->getClientOriginalExtension();
            $bg_image = Str::slug($inputs['title']) . time() . '.' . $extension;
            $inputs['bg_image']->move($model->bgimage, $bg_image);
            $model->bg_image = $bg_image;
        }
     
 
        $model->title = $inputs['title'];
        $model->slug = Str::slug($inputs['title']);
        $model->caption = $inputs['caption'];
        $model->description = $inputs['description'];

        $model->save();
    }

    public static function updateModel($request,$id)
    {
        $inputs =  $request->except(['_token']);
        $model = Feature::find($id);
        $model->fill($inputs);
        if (isset($inputs['image'])) {
            if ($model->image) {
                File::delete(public_path() . '/' . $model->upload . $model->image);
            }
            $extension = $inputs['image']->getClientOriginalExtension();
            $image = Str::slug($inputs['title']) . time() . '.' . $extension;
            $inputs['image']->move($model->upload, $image);
            $model->image = $image;
        } else if(isset($inputs['delete_image'])) {
            if ($model->image) {
                File::delete(public_path() . '/' . $model->upload . $model->image);
            }
            $model->image = '';
        }
        if (isset($inputs['bg_image'])) {
            if ($model->bg_image) {
                File::delete(public_path() . '/' . $model->bgimage . $model->bg_image);
            }
            $extension = $inputs['bg_image']->getClientOriginalExtension();
            $bg_image = Str::slug($inputs['title']) . time() . '.' . $extension;
            $inputs['bg_image']->move($model->bgimage, $bg_image);
            $model->bg_image = $bg_image;
        }
        $model->title = $inputs['title'];
        $model->slug = Str::slug($inputs['title']);
        $model->caption = $inputs['caption'];
        $model->description = $inputs['description'];

        $model->save();
    }

    public static function deleteModel($request)
    {
        $id = $request->id;
        $models = Feature::where('id',$id)->get(array('id', 'image','bg_image'));
        foreach ($models as $m) {
            File::delete(public_path() . '/' . $m->upload . $m->image);
            File::delete(public_path() . '/' . $m->thumb . $m->image);
            File::delete(public_path() . '/' . $m->bgimage . $m->bg_image);
        }
        return Feature::where('id', $id)->delete();
    }
}

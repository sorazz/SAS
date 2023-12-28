<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Image;
use File;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonial';
    public $upload = 'uploads/testimonial/';
    protected $fillable = [
        'name','caption','description','image','address','designation','status'
    ];

    public static function createModel($request)
    {
        $model = new Testimonial($request->all());
        $inputs =  $request->except(['_token']);
        if (isset($inputs['image'])) {
            $extension = $inputs['image']->getClientOriginalExtension();
            $image = Str::slug($inputs['name']) . time() . '.' . $extension;
            $inputs['image']->move($model->upload, $image);
            $model->image = $image;
        }

        $model->slug = Str::slug($inputs['name']);
        $model->caption = $inputs['caption'];
        $model->address = $inputs['address'];
        $model->designation = $inputs['designation'];
        $model->description = $inputs['description'];

        $model->save();
    }

    public static function updateModel($request,$id)
    {
        $inputs =  $request->except(['_token']);
        $model = Testimonial::find($id);
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
        $model->caption = $inputs['caption'];
        $model->address = $inputs['address'];
        $model->designation = $inputs['designation'];
        $model->description = $inputs['description'];

        $model->save();
    }

    public static function deleteModel($request)
    {
        $id = $request->id;
        $models = Testimonial::where('id',$id)->get(array('id', 'image'));
        foreach ($models as $m) {
            File::delete(public_path() . '/' . $m->upload . $m->image);
        }
        return Testimonial::where('id', $id)->delete();
    }
}

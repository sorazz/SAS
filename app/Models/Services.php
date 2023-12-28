<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Image;

class Services extends Model
{
    use HasFactory;
    protected $table = 'service';
    public $upload = 'uploads/service/';
    public $bgimage = 'uploads/service/bg/';
    private $file = 'uploads/service/file/';
    protected $fillable = [
        'title','caption','description','image','bg_image','status'
    ];

    public static function createModel($request)
    {
        $model = new Services($request->all());
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
        if (isset($inputs['file'])) {
            $filenamewithExt = $inputs['file']->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $inputs['file']->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $inputs['file']->storeAs($model->file, $fileNameToStore);
        } else {
            $fileNameToStore = "";
        }

        $model->slug = Str::slug($inputs['title']);
        $model->file = $fileNameToStore;
        $model->caption = $inputs['caption'];
        $model->description = $inputs['description'];

        $model->save();
    }

    public static function updateModel($request,$id)
    {
        $inputs =  $request->except(['_token']);
        $model = Services::find($id);
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
        if (isset($inputs['file'])) {
            $filenamewithExt = $inputs['file']->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $inputs['file']->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $inputs['file']->storeAs($model->file, $fileNameToStore);
        } else {
            $fileNameToStore = "";
        }
        $model->file = $fileNameToStore;
        $model->slug = Str::slug($inputs['title']);
        $model->file = $fileNameToStore;
        $model->caption = $inputs['caption'];
        $model->description = $inputs['description'];

        $model->save();
    }

    public static function deleteModel($request)
    {
        $id = $request->id;
        $models = Services::where('id',$id)->get(array('id', 'image','bg_image'));
        foreach ($models as $m) {
            File::delete(public_path() . '/' . $m->upload . $m->image);
            File::delete(public_path() . '/' . $m->thumb . $m->image);
            File::delete(public_path() . '/' . $m->bgimage . $m->bg_image);
        }
        return Services::where('id', $id)->delete();
    }
}

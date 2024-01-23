<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Image;
use File;

class SiteSetting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    public $siteLogo = 'uploads/setting/logo';
    public $aboutBg = 'uploads/setting/about/bg/';
    public $aboutImage = 'uploads/setting/about/image/';
    public $contactImage = 'uploads/setting/contact/image/';
    protected $fillable = [
        'site_info','site_name','site_description','facebook','instagram','contact_no','contact_info',
        'contact_description','contact_email','contact_address','goal','objective','client_description','project_description',
        'service_description','about_caption','about_description','about_image','meta','about_bg_image','site_logo','about_bg_image','contact_image'
    ];


    public static function updateModel(Request $request) {
        $inputs = $request->except(['_token']);
        $model = SiteSetting::find(1);
        $model->fill($inputs);
       
        if (isset($inputs['site_logo'])) {
        	if ($model->site_logo) {
                File::delete(public_path() . '/' . $model->siteLogo . $model->site_logo);
            }
            $extension = $inputs['site_logo']->getClientOriginalExtension();
            $site_logo = 'site-logo' . time() . '.' . $extension;
            $inputs['site_logo']->move($model->siteLogo, $site_logo);
            $model->site_logo = $site_logo;
        }
        if (isset($inputs['about_bg_image'])) {
        	if ($model->about_bg_image) {
                File::delete(public_path() . '/' . $model->aboutBg . $model->about_bg_image);
            }
            $extension = $inputs['about_bg_image']->getClientOriginalExtension();
            $about_bg_image = 'about-bg' . time() . '.' . $extension;
            $inputs['about_bg_image']->move($model->aboutBg, $about_bg_image);
            $model->about_bg_image = $about_bg_image;
        }
        if (isset($inputs['about_image'])) {
        	if ($model->about_image) {
                File::delete(public_path() . '/' . $model->aboutImage . $model->about_image);
            }
            $extension = $inputs['about_image']->getClientOriginalExtension();
            $about_image = 'site-logo' . time() . '.' . $extension;
            $inputs['about_image']->move($model->aboutImage, $about_image);
            $model->about_image = $about_image;
        }
        if (isset($inputs['contact_image'])) {
        	if ($model->about_image) {
                File::delete(public_path() . '/' . $model->contactImage . $model->contact_image);
            }
            $extension = $inputs['contact_image']->getClientOriginalExtension();
            $contact_image = 'site-logo' . time() . '.' . $extension;
            $inputs['contact_image']->move($model->contactImage, $contact_image);
            $model->contact_image = $contact_image;
        }

        

       $model->site_info = $inputs['site_info'] ? $inputs['site_info'] : '';
       $model->site_name = $inputs['site_name'] ? $inputs['site_name'] : '';
       $model->site_description = $inputs['site_description'] ?  $inputs['site_description'] : ''; 
       $model->facebook = $inputs['facebook'] ? $inputs['facebook'] : ''; 
       $model->instagram = $inputs['instagram'] ? $inputs['instagram'] :''; 
       $model->linkend = $inputs['linkend'] ? $inputs['linkend'] : ''; 
       $model->contact_no = $inputs['contact_no'] ? $inputs['contact_no'] : ''; 
       $model->contact_info = $inputs['contact_info'] ?$inputs['contact_info'] : ''; 
       $model->contact_description = $inputs['contact_description'] ? $inputs['contact_description'] : ''; 
       $model->contact_email = $inputs['contact_email'] ? $inputs['contact_email'] : ''; 
       $model->contact_address = $inputs['contact_address'] ?$inputs['contact_address'] : ''; 
       $model->goal = $inputs['goal'] ?  $inputs['goal'] : ''; 
       $model->objective = $inputs['objective'] ? $inputs['objective'] : ''; 
       $model->client_description = $inputs['client_description'] ? $inputs['client_description'] : ''; 
       $model->project_description = $inputs['project_description'] ? $inputs['project_description'] : ''; 
       $model->service_description = $inputs['service_description'] ? $inputs['service_description'] : ''; 
       $model->about_caption = $inputs['about_caption'] ? $inputs['about_caption'] : ''; 
       $model->about_description = $inputs['about_description'] ? $inputs['about_description'] : ''; 
       $model->meta = $inputs['meta'] ? $inputs['meta'] : ''; 
       $model->meta_keyword = $inputs['meta_keyword'] ?   $inputs['meta_keyword'] : ''; 
       $model->meta_description =  $inputs['meta_description'] ? $inputs['meta_description'] : ''; 
     
        
        $model->save();

    }


}

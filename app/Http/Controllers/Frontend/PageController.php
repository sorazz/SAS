<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Services;
use App\Models\Testimonial;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Project;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function page(Request $request)
    {
        $slug = $request->slug;

        switch ($slug) {
            case 'about':
                $data = SiteSetting::find(1)->get();
                break;
            case 'feature':
                $data = Feature::orderBy('title', 'desc')->get();
                break;
            case 'project':
                $data = Project::orderBy('name', 'desc')->get();
                break;
            case 'services':
                $data = Services::orderBy('title', 'desc')->get();
                break;
            case 'testimonial':
                $data = Testimonial::orderBy('name', 'desc')->get();
                break;
            default:
                $data = [];
                break;
        }
        return view('frontend.pages.' . $slug, $data);
    }

    public function contact(ContactRequest $request)
    {
        $recaptchaSecretKey = config('services.recaptcha.secret');
        $recaptchaResponse = $request->input('recaptchaResponse');

        $recaptchaVerification = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        if (!$recaptchaVerification->json('success')) {
            // Handle reCAPTCHA validation error
            return response()->json(['error' => 'reCAPTCHA validation failed'], 400);
        }
        $input = $request->except(['_token']);
        $contact = new Contact();

        $contact->fname = $input['fname'];
        $contact->lname = $input['lname'];
        $contact->email = $input['email'];
        $contact->contact = $input['contact'];
        $contact->address = $input['address'];
        $contact->description = $input['comments'];
        $contact->save();

        return response()->json([
            'message' => "Quote has been sent success",
            'success' => true
        ]);

        return response()->json([
            'message' => "Quote has been sent success",
            'success' => true
        ]);
    }
}

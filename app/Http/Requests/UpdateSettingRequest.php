<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "site_name" => "required",
            "contact_email" => "required|email",
            "bg_about" => "mimes:jpeg,png,gif|max:1024",
            "bg_contact" => "mimes:jpeg,png,gif|max:1024",
        ];
    }
}

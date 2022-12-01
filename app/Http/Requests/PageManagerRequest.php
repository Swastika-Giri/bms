<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageManagerRequest extends FormRequest
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
            'menu_name' =>'required',
            'menu_slug' => 'nullable',
            'position'  => 'required',
            'feature_image'=>'required|mimes:jpeg,png,jpg,gif size:5000000',
            'page_content'=>'required',
            'redirect_url'=>'required |url',
            'status'=>'required',

        ];
    }
}

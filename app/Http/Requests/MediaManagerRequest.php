<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaManagerRequest extends FormRequest
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
            'file_name'=>'required||mimes:jpeg,png,jpg,gif,pdf,docs size:5000000',
//            'file_type'=>'required',
//            'file_path'=>'required',
        ];
    }
}

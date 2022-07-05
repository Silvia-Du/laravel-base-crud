<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required | max:50 | min:3',
            'image'=> 'required | max:255 | min:10',
            'type'=> 'required | max:50 | min:5'
        ];
    }

    public function messages()
    {
        return [
                'title.required' => 'Title è obbligatorio',
                'title.max' => 'Title può avere massimo :max caratteri',
                'title.min' => 'Title deve avere minimo :min caratteri',

                'image.required' => 'Image è obbligatorio',
                'image.max' => 'Image può avere massimo :max caratteri',
                'image.min' => 'Image deve avere minimo :min caratteri',

                'type.required' => 'Type è obbligatorio',
                'type.max' => 'Type può avere massimo :max caratteri',
                'type.min' => 'Type deve avere minimo :min caratteri'
        ];
    }
}

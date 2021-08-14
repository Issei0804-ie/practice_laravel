<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //https://readouble.com/laravel/5.7/ja/validation.html
        return [
            'name' => 'required|string|max:50',
            'price' => 'required|integer',
            'author' => 'required|string|max:50'
        ];
    }
}

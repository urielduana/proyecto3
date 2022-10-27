<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerBook extends FormRequest
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
            'isbn' => 'required|int',
            'title' => 'required',
            'author' => 'required',
            'pages' => 'required|int',
            'editorial' => 'required',
            'editorialEmail' => 'required|email:rfc,dns'
        ];
    }
}

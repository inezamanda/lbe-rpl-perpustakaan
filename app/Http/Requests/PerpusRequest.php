<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerpusRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'author' => ['required', 'string'],
            'location' => ['required', 'string'],
            'publisher' => ['required', 'string'],
            'print_year' => ['required', 'string'],
            'user_id' => ['required', 'string'],
        ];
    }
}

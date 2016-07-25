<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateMovie extends Request
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
            'title' => 'required',
            'description' => 'required',
            'room_id' => 'required',
            'genre' => 'required',
            'cast' => 'required',
            'price' => 'required',
            'release_date' => 'required'
        ];
    }
}

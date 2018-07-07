<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'player_api_id'  => 'required',
            'player_fifa_api_id'  => 'required',
            'player_name' => 'required',
            'birthday' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ];
    }
}

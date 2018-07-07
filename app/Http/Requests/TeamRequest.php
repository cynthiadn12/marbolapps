<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'team_api_id'  => 'required',
            'team_fifa_api_id'  => 'required',
            'team_long_name' => 'required',
            'team_short_name' => 'required',
        ];
    }
}

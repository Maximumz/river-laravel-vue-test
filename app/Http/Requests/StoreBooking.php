<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooking extends FormRequest
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
            'name' => 'required|max:120',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'required|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Not so hasty, a name is required',
            'name.max' => 'Hold on their cowboy max length allowed for your name is 120 characters',
            'date.required'  => 'Not so hasty, a date is required',
            'time.required'  => 'Not so hasty, time is required',
            'message.required' => 'Not so hasty, a message is required',
            'message.max' => 'Hold on their cowboy max length for message is 255 characters'
        ];
    }
}

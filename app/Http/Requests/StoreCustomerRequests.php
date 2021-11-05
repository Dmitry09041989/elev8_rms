<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequests extends FormRequest
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
            'first_name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255|email|unique:customers',
            'street' => 'required|max:255',
            'city' => 'required|max:255',
            'postcode' => 'required|max:255|',
            'phone_number' => 'required|max:255',
            'height' => 'int|max:255',
            'weight' => 'int|max:255',
        ];
    }
}

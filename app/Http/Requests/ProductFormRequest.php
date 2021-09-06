<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->type == 'topup') {
            return [
                'phone' => 'required|between:7,12|regex:/(081)[0-9]/',
                'value' => 'required|integer'
            ];
        } else {
            return [
                'productName' => 'required|between:10,150',
                'address' => 'required|between:10,150',
                'price' => 'required|integer'
            ];
        }
    }

    public function messages()
    {
        return [
            'phone.required'=> 'Phone is required!',
            'phone.between' => 'Phone length between 7 ~ 12',
            'phone.regex'   => 'Phone start with 081',
            'value.required'=> 'Amount is required!',
            'productName.required'=> 'Product is required!',
            'productName.between'=> 'Product length between 10 ~ 150',
            'address.required'=> 'Address is required!',
            'address.between'=> 'Address length between 10 ~ 150',
            'price.required'=> 'Amount is required!',
        ];
    }
}

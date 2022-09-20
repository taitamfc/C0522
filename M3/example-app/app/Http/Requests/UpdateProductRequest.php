<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateProductRequest extends FormRequest
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
        $roles = [
            'name'          => 'required|min:3|unique:products',
            'price'         => 'required',
            'description'   => 'required',
        ];

        return $roles;
    }

    public function messages(){
        $messages = [
            'min' => 'Bat buoc lon hon',
            'name.required' => 'Ban chua nhap ten',
            'price.required' => 'Ban chua nhap gia',
        ];
        return $messages;
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}

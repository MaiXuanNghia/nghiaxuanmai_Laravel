<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Date;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nameproduct' => 'required',
            'priceproduct' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'nameproduct.required' => ':attribute bắt buộc phải nhập',
            'priceproduct.required' => ':attribute bắt buộc phải nhập',
            'priceproduct.integer' => ':attribute bắt buộc phải nhập số không nhập chữ',
        ];
    }

    public function attributes()
    {
        return [
            'nameproduct' => 'tên của sản phẩm',
            'priceproduct' => 'giá của sản phẩm',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'Create_at' => date('Y-m-d H:i:s'),
        ]);

        // dd('pre');
    }

    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', 'Something is wrong with this field!');
                // dd($validator->errors()->count());
            }

            // dd('ok vẫn hiển thị;');
        });
    }
}

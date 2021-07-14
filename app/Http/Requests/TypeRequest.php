<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
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
            'name' => 'required|min:3|max:191'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Bắt buộc",
            'name.min' => "Ít nhất có 3 ký tự",
            // 'name.unique' => "Tiêu đề đã tồn tại",
        ];
    }
}

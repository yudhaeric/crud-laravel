<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nim' => 'unique:students|max:10|required', //bisa tambah |max:10 untuk panjang data
            'name' => 'required',
            'email' => 'unique:students',
            'address' => 'required',
            'class_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nim' => 'NIM',
            'name' => 'nama',
            'email' => 'email',
            'address' => 'alamat',
            'class_id' => 'kelas',
        ];
    }

    public function messages()
    {
        return [
            'nim.required' => 'NIM wajib diisi!',
            'nim.max' => 'NIM maksimal :max karakter!',
        ];
    }
}

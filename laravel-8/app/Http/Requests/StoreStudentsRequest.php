<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'nama' => 'required',
            'nim' => 'required|max:10',
            'email' => 'required|email:dns',
            'jurusan' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Kolom Nama harus di isi',
            'nim.required' => 'Kolom NIM harus di isi',
            'nim.max' => 'Panjang kolom NIM maksimal 10 karakter',
            'email.required' => 'Kolom Email harus di isi',
            'email.email' => 'Email harus valid',
            'jurusan.required' => 'Kolom Jurusan harus di isi',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'perangkat' => 'required',
            'jenis_kerusakan' => 'required',
            'alamat' => 'required',
            'tanggal_pengerjaan' => 'required',
            'catatan' => 'required',
            'harga' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Inputan :attribute masih kosong.'
        ];
    }
}

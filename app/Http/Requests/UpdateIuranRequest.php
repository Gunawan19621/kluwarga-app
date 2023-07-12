<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIuranRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_iuran' => 'required',
            'jumlah' => 'required',
            'periode' => 'required',
            'status_iuran' => 'required',
            'pj_iuran' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'nama_wallet' => 'required',
            'no_wallet' => 'required',
        ];
    }
}

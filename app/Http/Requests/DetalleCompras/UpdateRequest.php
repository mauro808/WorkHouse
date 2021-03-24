<?php

namespace App\Http\Requests\DetalleCompras;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}

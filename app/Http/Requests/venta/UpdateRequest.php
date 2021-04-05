<?php

namespace App\Http\Requests\venta;

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

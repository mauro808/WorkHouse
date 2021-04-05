<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

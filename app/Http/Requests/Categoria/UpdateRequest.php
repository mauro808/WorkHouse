<?php

namespace App\Http\Requests\Categoria;

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
              
            'nombreCategoria'=>'required|unique:categorias|regex:/^[\pL\s\-]+$/u|max:50',
            'Descripcion'=>'required|max:250',
        ];
    }              
}

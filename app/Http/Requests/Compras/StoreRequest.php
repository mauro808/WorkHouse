<?php

namespace App\Http\Requests\Compras;

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
            
            'created_at'=>'required',
            'idUsuario'=>'required',
            'total'=>'required',
            'estado'=>'required',
            'cantidad'=>'required',
            'precio'=>'required',
           'idProducto '=>'required',
            'idCompra'=>'required', 
           
            
        ]; 
    }
                
    /*public function messages(){

        return [
                'created_at.required' => '*Rellena este campo',
                'idUsuario.required' => '*Rellena este campo',
                'total.required' => '*Rellena este campo',
                'idProducto.required' => '*Rellena este campo',
                'cantidad.required' => '*Rellena este campo',
                'precio.required' => '*Rellena este campo',
                'idCompra.required' => '*Rellena este campo',
                ];
    }      */      
}

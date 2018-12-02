<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
          'name' => 'required',
          'description' => 'required',
          'price' => 'required | numeric',
          'stock' => 'required | integer',
          'size_id' => 'required',
          'user_id' => 'required',
          'img1' => 'required | mimes:jpeg,jpg,png',
        ];
    }

    /**
  	* Get the validation messages that apply to the request.
  	*
  	* @return array
  	*/
    public function messages()
  	{
  		return [
  			'name.required' => 'El nombre es obligatorio',
  			'description.required' => 'La descripción es obligatoria',
        'price.required' => 'El precio es obligatorio',
  			'price.numeric' => 'El precio debe ser un número',
        'stock.required' => 'El stock es obligatorio',
  			'stock.integer' => 'El stock debe ser un número entero',
  			'awards.required' => 'Los premios son obligatorios',
        'size_id.required' => 'El talle es obligatorio',
        'user_id.required' => 'El usuario es obligatorio',
  			'img1.mimes' => 'Formatos permitidos JPG, y PNG',
  		];
  	}
}

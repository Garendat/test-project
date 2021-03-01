<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseFilterRequest extends FormRequest
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
            'name'      => 'nullable|string|max:255',
            'price'     => 'nullable|numeric',
            'bedrooms'  => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'storeys'   => 'nullable|integer',
            'garages'   => 'nullable|integer',
        ];
    }

    public function attributes() {
        return [
            'name'     => 'Название',
            'price'    => 'Цена',
            'bedrooms' => 'Кол-во спален',
            'storeys'  => 'Этажность',
            'garages'  => 'Кол-во гаражей'
        ];
    }

    public function messages() {
        return [
            'string'   => 'Поле :attribute должно быть в строковом формате',
            'max'      => 'У поля :attribute лимит в 255 символов',
            'integer'  => 'Поле :attribute должно быть в числовом формате',
            'numeric'  => 'Поле :attribute должно быть в числовом формате',
        ];
    }
}

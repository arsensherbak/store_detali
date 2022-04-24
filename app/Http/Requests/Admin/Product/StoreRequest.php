<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file',
            'category_id' => 'required|exists:categories,id',
            'car_id' => 'required|exists:cars,id',
            'subcategory_id' => 'required|exists:subcategories,id'
        ];
    }
}

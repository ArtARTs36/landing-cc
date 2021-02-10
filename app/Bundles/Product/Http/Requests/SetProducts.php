<?php

namespace App\Bundles\Product\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class SetProducts extends FormRequest
{
    public const FIELD_ITEMS = 'items';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'items' => 'required|array',
            'items.*.'. Product::FIELD_NAME => 'required|string',
            'items.*.'. Product::FIELD_PRICE => 'required',
            'items.*.'. Product::FIELD_SIZE => 'required',
            'items.*.'. Product::FIELD_SIZE_UNIT => 'required|string',
        ];
    }
}

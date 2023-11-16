<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PromotionsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'PromotionName' => 'required',
            'PromotionCode' => 'required',
            'DiscountAmount' => 'required|numeric',
            'DiscountType' => 'required|integer',
            'StartDate' => 'required|date',
            'EndDate' => 'required|date',
        ];
    }
    public function messages(): array
    {
        return [

            'PromotionName.required' => 'Vui lòng nhập tên chương trình khuyến mãi.',
            'PromotionCode.required' => 'Vui lòng nhập mã chương trình khuyến mãi.',
            'DiscountAmount.required' => 'Vui lòng nhập số tiền giảm giá.',
            'DiscountAmount.numeric' => 'Số tiền giảm giá phải là một số.',
            'DiscountType.required' => 'Vui lòng chọn loại giảm giá.',
            'DiscountType.integer' => 'Loại giảm giá phải là một số nguyên.',
            'StartDate.required' => 'Vui lòng nhập ngày bắt đầu.',
            'StartDate.date' => 'Ngày bắt đầu phải là một ngày hợp lệ.',
            'EndDate.required' => 'Vui lòng nhập ngày kết thúc.',
            'EndDate.date' => 'Ngày kết thúc phải là một ngày hợp lệ.',
        ];
    }
}

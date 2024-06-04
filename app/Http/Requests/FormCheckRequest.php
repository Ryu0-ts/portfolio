<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCheckRequest extends FormRequest
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
            "type"=>"required",
            "gender"=>"required",
            "kind"=>"required",
            "old"=>['required','integer',"min:0","max:30"],
            "size"=>['required', 'numeric',"min:0","max:30"],
            "vaccine"=>"required",
            "surgery"=>"required",
            "background"=>['required','string','max:300'],
            "terms"=>['required','string','max:300'],
            "invoice"=>['required','string','max:300'],
            "others"=>['required','string','max:300'],
            "image"=>'file|mimes:jpg,png',
            "situation"=>"required",
            "total_price"=>["integer","min:0"],
        ];
    }

    public function messages(): array
    {
        return[
            "type.required" => ":attributeは必須項目です",
            "situation.required" => ":attributeは必須項目です",
            "gender.required" => ":attributeは必須項目です",
            "kind.required" => ":attributeは必須項目です",
            "old.required" => ":attributeは必須項目です",
            "old.integer"=>":attributeは整数を入力してください",
            "old.min" => ":attributeは0から30の範囲を入力してください",
            "old.max" => ":attributeは0から30の範囲を入力してください",
            "size.required" => ":attributeは必須項目です",
            "size.numeric" => ":attributeは整数または少数で入力してください",
            "size.min" => ":attributeは0以上30以下を入力してください",
            "size.max" => ":attributeは0以上30以下を入力してください",
            "vaccine.required" => ":attributeは必須項目です",
            "surgery.required" => ":attributeは必須項目です",
            "background.required" => ":attributeは必須項目です",
            "background.max" => ":attributeは300文字以下です",
            "terms.required" => ":attributeは必須項目です",
            "terms.max" => ":attributeは300文字以下です",
            "invoice.required" => ":attributeは必須項目です",
            "invoice.max" => ":attributeは300文字以下です",
            "total_price.integer" =>":attributeは整数を入力してください",
            "total_price.min" => ":attributeは0以上を入力してください",
            "others.required" => ":attributeは必須項目です",
            "others.max" => ":attributeは300文字以下です",
            "image.mimes" => "JPEG形式またはPNG形式のみアップロード可能です",
        ];
    }

    public function attributes()
    {
        return [
            'type' => '種類',
            'situation'=>'状況',
            'gender' => '性別',
            'kind' => '種類/分別',
            'old' => '年齢',
            'size' => 'サイズ',
            'vaccine' => 'ワクチン接種',
            'surgery' => '去勢/不妊手術',
            'background' => '保護された経緯',
            'terms' => 'お引き取り条件',
            'invoice' => '請求書',
            'others' => 'その他',

            'total_price' => '合計金額'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'job_name'=>'required|min:3|max:196',
            'job_province'=>'required',
            'job_city'=>'required',
            'job_level_3'=>'required',
            'job_experience'=>'required',
            'job_education'=>'required',
            'job_description'=>'required|min:6',
            'job_address'=>'required|max:196',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'job_name.required' => '工作名 不能为空',
            'job_name.min' => '工作名 不能少于6个字符',
            'job_name.max' => '工作名 不能多于196个字符',
            'job_level_3.required'  => '类型 不能为空',
            'job_experience.required'  => '工作经历 不能为空',
            'job_education.required'  => '学历 不能为空',
            'job_address.required'  => '地址 不能为空',
            'job_description.required'  => '描述 不能为空',
            'job_description.min'       => '内容 不能少于6个字符',
        ];
    }
}

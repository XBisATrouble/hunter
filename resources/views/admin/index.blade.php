@extends('layouts.adminApp')

@section('content')
<div class="main_content">
    <div class="main_company_controll moduel">
        <div class="main_compnay_left_banner">
            <ul class="main_compnay_left_nav">
                <li>示例标签一</li>
                <li>示例标签二</li>
                <li>示例标签三</li>
            </ul>
        </div>
        <div class="main_company_right_banner">
            <ul class="main_company_right_banner_nav">
                <li>已收到的简历</li>
                <li>已处理的简历</li>
                <li>热门简历</li>
            </ul>
                <div class="index_single_item">
                    <div class="index_single_item_jobinfo">
                        <div class="index_single_item_jobinfo_numofpeople">
                            收到
                            <span class="numofpeople">5</span>
                            份简历
                        </div>
                        <div class="index_single_item_jobinfo_edit_button index_single_item_jobinfo_button">
                            <a href="" class="full_a">查看简历</a>
                        </div>
                        <div class="index_single_item_jobinfo_offline_button index_single_item_jobinfo_button">
                            <a href="" class="full_a">下线</a>
                            <!-- ^^^^^^^^^^^^^^^^下线功能^^^^^^^^^^^^^^^^^^^ --> </div>
                        <a class="gray big" href=""></a>
                        <p class="gray">
                            工作发布于 : 2017
                            <br></p>
                        <p class="gray" style="height: 150px;">
                            工作简介 : 2017201720172017201720172017201720172017201720172017201720172017201720172017201720172017201720172017
                            <br></p>
                    </div>
                    <div class="index_single_item_peopleinfo"></div>
                    <div class="index_single_item_peopleinfo"></div>
                </div>
                <div class="line_gray"></div>
            <div class="main_company_right_content"></div>
        </div>
    </div>
</div>
@endsection
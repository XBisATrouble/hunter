@extends('layouts.adminApp')

@section('content')
<div class="main_content">
    <div class="main_company_controll moduel">
        <div class="main_compnay_left_banner">
            <ul class="main_compnay_left_nav">
                <li>查看简历</li>
                <li>查看已发布的工作</li>
                <li>查看面试</li>
            </ul>
        </div>
        <div class="main_company_right_banner">
            <ul class="main_company_right_banner_nav">
                <li>已收到的简历</li>
                <li>已处理的简历</li>
            </ul>
            <div class="index_single_item">
                <div class="index_single_item_jobinfo">
                    <a class="gray big" href="">PHP工程师</a>
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
                        工作发布于 : 
                        <br></p>
                    <p class="gray" style="height: 100px;">
                        工作简介 : 
                        <br></p>
                </div>
            </div>
            <div class="index_single_item">
                <div class="index_single_item_jobinfo">
                    <a class="gray big" href="">PHP工程师</a>
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
                        工作发布于 : 
                        <br></p>
                    <p class="gray" style="height: 100px;">
                        工作简介 : 
                        <br></p>
                </div>
            </div>
            <div class="line_gray"></div>
            <div class="main_company_right_content"></div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.adminApp')
@section('content')
    <script type="text/javascript" src="/js/city.js"></script>
    <div class="main_content">
        <div class="main_jobs_moduel moduel">
            <form class="job_info" name="job_info" action="/admin/jobs/{{ $job->id }}" method="post">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <span class="job_tittle">职位信息</span>
                <img src="/dist/job.png">
                <input class="job_input" type="text" name="job_name" value="{{ $job->name }}" placeholder="您要发布的职位名称">
                @if ($errors->has('job_name'))
                    <span class="input_error_msg">{{ $errors->first('job_name') }}</span>
                @endif
                <br>
                <img src="/dist/loc.png">
                <select class="job_select job_province" name="job_province" onchange="selectcityarea('job_province','job_city','job_info');">
                    <option value="{{ $job->province }}" selected="selected">{{ $job->province }}</option>
                </select>
                <select class="job_select job_city" name="job_city">
                    <option value="{{ $job->city }}" selected="selected">{{ $job->city }}</option>
                </select>
                <input class="job_input mid" type="text" name="job_address" value={{ $job->address }} placeholder="详细地址">
                @if ($errors->has('job_address'))
                    <span class="input_error_msg">{{ $errors->first('job_address') }}</span>
                @endif
                <br>
                <img src="/dist/sal.png">
                <input class="job_input moreSmall" type="text" name="job_salary_min" value="{{ $matches[1] }}" placeholder="薪水(单位K)">
                ~
                <input class="job_input moreSmall" type="text" name="job_salary_max" value="{{ $matches[2] }}" placeholder="薪水(单位K)">
                <br>
                <span class="job_tittle">职位需求</span>
                <img src="/dist/type.png">
                <select class="job_select job_level_1" name="job_level_1">
                    <option selected="selected">{{ $class[2] }}</option>
                </select>
                <select class="job_select job_level_2" name="job_level_2">
                    <option selected="selected">{{ $class[1] }}</option>
                </select>
                <select class="job_select job_level_3" name="job_level_3">
                    <option selected="selected">{{ $class[0] }}</option>
                </select>
                <br>
                <img src="/dist/exp.png">
                <select class="job_select job_experience" name="job_experience">
                    <option selected="selected">{{ $job->experience }}</option>
                    <option>应届</option>
                    <option>3年以下</option>
                    <option>三年至五年</option>
                    <option>五年至十年</option>
                    <option>十年以上</option>
                    <option>不限</option>
                </select>
                @if ($errors->has('job_experience'))
                    <span class="input_error_msg">{{ $errors->first('job_experience') }}</span>
                @endif
                <br>
                <img src="/dist/dia.png">
                <input class="job_input" type="text" name="job_advantage" value="{{ $job->advantage }}" placeholder="职位诱惑">
                <br>
                <img src="/dist/edu.png">
                <select class="job_select job_education" name="job_education">
                    <option selected="selected">学历要求</option>
                    <option selected="selected">{{ $job->education }}</option>
                    <option>博士</option>
                    <option>硕士</option>
                    <option>本科</option>
                    <option>大专</option>
                    <option>高中</option>
                    <option>不限</option>
                </select>
                @if ($errors->has('job_education'))
                    <span class="input_error_msg">{{ $errors->first('job_education') }}</span>
                @endif
                <br>
                <img src="/dist/des.png">
                <br>
                <textarea class="job_input job_description" name="job_description" placeholder="对您发布的职位待遇以及详情进行描述(必填)">{{ $job->description }}</textarea>
                <br>
                <input class="post_job_submit_button" type="submit" name="job_info" style="display: none;">
                <div class="post_job_button">发布职位</div>
            </form>
        </div>
    </div>

    <script src="/js/postJob.js"></script>
    <script type="text/javascript">first("job_province","job_city","job_info",0,0);</script>
@endsection('content')
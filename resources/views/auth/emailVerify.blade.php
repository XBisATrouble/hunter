@extends('layouts.adminApp')

@section('content')
    <div class="main_content">
        <div class="main_jobs_moduel moduel">
            <div class="email_verify_message">
                恭喜您验证成功，三秒后跳回主页
            </div>
            <div class="return_index_button" onclick="window.location='{{ url('admin') }}'">
                返回首页
            </div>
        </div>
    </div>
    <script type="text/javascript">
        onload=function(){
            setTimeout(go, 3000);
        };
        function go(){
            location.href='{{ url('admin') }}';
        }
    </script>
@endsection
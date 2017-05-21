@extends('layouts.userApp')
@section('content')
@include('vendor.ueditor.assets')
<div class="main_content">
    <div class="question_modeul">
        <div class="question_banner">
            <div class="question_show_tittle">{{ $question->title }}</div>
            <div class="question_show_info">
                {{ $question->publisher->name }} 发布于三天前 {{ $question->answers_count }}个回复
            </div>
            <div class="question_show_body">{!!  $question->body !!}</div>
        </div>
        <div class="question_publisher_info_banner">
            <img src="/images/avatars/default.png">
            <div class="question_publisher_name">赵晴</div>
        </div>
        <div class="question_line">
            <div class="question_line_tittle">回复</div>
        </div>
        <div class="question_comment_banner">
            <!--  item作为循环单位 -->
            @foreach($question->answers as $answer)
            <div class="question_comment_item_banner">
                <img src="{{ $answer->
                user->avatar }}">
                <div class="question_comment_item">{{ $answer->user->name }}</div>
                <div class="question_comment_item">{!! $answer->body !!} {!! $answer->updated_at !!}</div>
            </div>
            @endforeach
        </div>
        @if(Auth::check())
        <div class="question_line">
            <div class="question_line_tittle">我的回复</div>
        </div>
        <form action="/questions/{{ $question->
            id }}/answer" method="post">
                    {{ csrf_field() }}
            <!-- 编辑器容器 -->
            <div class="editor_banner">
                <div class="form-group{{ $errors->
                    has('body') ? ' has-error' : '' }}">
                    <script id="container" name="body" style="height:200px;" type="text/plain">{!! old('body')  !!}</script>
                    @if ($errors->has('body'))
                    <span class="help-block"> <strong>{{ $errors->first('body') }}</strong>
                    </span>
                    @endif
                </div>
                <button class="question_submit_button">提交</button>
            </div>
        </form>
        @else
        <div class="button_banner">
            <button class="return_login">登陆提交回复</button>
        </div>
        @endif
    </div>
</div>

<!-- 实例化编辑器 -->
<script type="text/javascript">
        var ue = UE.getEditor('container', {
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection('content')
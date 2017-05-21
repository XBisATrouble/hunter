@extends('layouts.userApp')
@section('content')
@include('vendor.ueditor.assets')
<div class="main_content">
    <div class="question_modeul">
        <div class="question_banner">
            <div class="question_show_tittle">{{ $question->title }}</div>
            <div class="question_show_info">恽涵发布于三天前 {{ $question->answers_count }}个回复</div>
            <div class="question_show_body">{!!  $question->body !!}</div>
        </div>
        <div class="question_publisher_info_banner"></div>
        <div class="question_line">
            <div class="question_line_tittle">回答</div>
        </div>
        <div class="question_comment_banner">
            <!--  item作为循环单位 -->
            <div class="question_comment_item_banner">
                <img src="/images/avatars/1_1495114810img.png">
                <div class="question_comment_item">
                    大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的大家在用HomeStead开发的时候,Node实在HomeStead里面运行的还是在本机运行的
                </div>
            </div>

        </div>
        <div class="question_line">
            <div class="question_line_tittle">我的评论</div>
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
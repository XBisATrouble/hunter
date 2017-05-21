@extends('layouts.userApp')
@section('content')
    @include('vendor.ueditor.assets')
<div class="main_content">
    {{ $question->title }}
        {!!  $question->body !!}
    <div class="answers">
        {{ $question->answers_count }}个回复
        <div>
            @foreach($question->answers as $answer)
                {!! $answer->body !!}
            @endforeach
            <form action="/questions/{{ $question->
                id }}/answer" method="post">
                    {{ csrf_field() }}
                <!-- 编辑器容器 -->
                <div class="form-group{{ $errors->
                    has('body') ? ' has-error' : '' }}">
                    <script id="container" name="body" style="height:200px;" type="text/plain">{!! old('body')  !!}</script>
                    @if ($errors->has('body'))
                    <span class="help-block"> <strong>{{ $errors->first('body') }}</strong>
                    </span>
                    @endif
                </div>
                <button>提交</button>
            </form>
        </div>
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
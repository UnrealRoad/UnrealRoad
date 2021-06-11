<x-app-layout>
    <link rel="stylesheet" href="{{asset('./js/layui/css/layui.css')}}">

    <div>

        <div class="layui-btn-container">
            <button type="button" class="layui-btn layui-btn-normal" id="test8">选择文件</button>
            <button type="button" class="layui-btn" id="test9">开始上传</button>
        </div>
    </div>
</x-app-layout>

<script src="{{asset('./js/layui/layui.js')}}"></script>
<script>
    layui.use(['upload', 'element', 'layer'], function(){
        var $ = layui.jquery
            ,upload = layui.upload
            ,element = layui.element
            ,layer = layui.layer;

        //选完文件后不自动上传
        upload.render({
            elem: '#test8'
            ,url: '/upload' //改成您自己的上传接口
            ,auto: false
            //,multiple: true
            ,bindAction: '#test9',
            accept:'file',
            headers:{'X-CSRF-TOKEN':"{{ csrf_token() }}"},
            exts:"exe|yml|zip"
            ,done: function(res){
                layer.msg('上传成功');
                console.log(res)
            }
        });



    });
</script>

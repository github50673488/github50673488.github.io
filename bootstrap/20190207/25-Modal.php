<!DOCTYPE html>
<html>

    <head>
        <title>Bootstrap 实例 - 模态框（Modal）插件</title>
        <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

    <body>
        <h2>创建模态框（Modal）</h2>
        <!-- 按钮触发模态框 -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">开始演示模态框</button>
        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">模态框（Modal）标题</h4></div>
                    <div class="modal-body">在这里添加一些文本</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">提交更改</button></div>
                </div>
                <!-- /.modal-content --></div>
            <!-- /.modal --></div>
    </body>

</html>
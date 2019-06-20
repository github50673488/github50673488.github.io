<!DOCTYPE html>
<html>
  
  <head>
    <title>Bootstrap 实例 - 警告框（Alert）插件事件</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  
  <body>
    <div id="myAlert" class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>成功！</strong>结果是成功的。</div>
    <script type="text/javascript">$(function() {
        $("#myAlert").bind('closed.bs.alert',
        function() {
          alert("警告消息框被关闭。");
        });
      });</script>
  </body>

</html>
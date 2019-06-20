<!DOCTYPE html>
<html>
  
  <head>
    <title>Bootstrap 实例 - 分割的按钮下拉菜单</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  
  <body>
    <div class="btn-group">
      <button type="button" class="btn btn-default">默认</button>
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">切换下拉菜单</span></button>
      <ul class="dropdown-menu" role="menu">
        <li>
          <a href="#">功能</a></li>
        <li>
          <a href="#">另一个功能</a></li>
        <li>
          <a href="#">其他</a></li>
        <li class="divider"></li>
        <li>
          <a href="#">分离的链接</a></li>
      </ul>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">原始</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">切换下拉菜单</span></button>
      <ul class="dropdown-menu" role="menu">
        <li>
          <a href="#">功能</a></li>
        <li>
          <a href="#">另一个功能</a></li>
        <li>
          <a href="#">其他</a></li>
        <li class="divider"></li>
        <li>
          <a href="#">分离的链接</a></li>
      </ul>
    </div>
  </body>

</html>
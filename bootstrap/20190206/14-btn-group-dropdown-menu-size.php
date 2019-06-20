<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 按钮下拉菜单的大小</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="btn-group">
   <button type="button" class="btn btn-default dropdown-toggle btn-lg"        data-toggle="dropdown">
      默认 <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" role="menu">
      <li><a href="#">功能</a></li>
      <li><a href="#">另一个功能</a></li>
      <li><a href="#">其他</a></li>
      <li class="divider"></li>
      <li><a href="#">分离的链接</a></li>
   </ul>
</div>
<div class="btn-group">
   <button type="button" class="btn btn-primary dropdown-toggle btn-sm"        data-toggle="dropdown">
      原始 <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" role="menu">
      <li><a href="#">功能</a></li>
      <li><a href="#">另一个功能</a></li>
      <li><a href="#">其他</a></li>
      <li class="divider"></li>
      <li><a href="#">分离的链接</a></li>
   </ul>
</div>
<div class="btn-group">
   <button type="button" class="btn btn-success dropdown-toggle btn-xs"        data-toggle="dropdown">
      成功 <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" role="menu">
      <li><a href="#">功能</a></li>
      <li><a href="#">另一个功能</a></li>
      <li><a href="#">其他</a></li>
      <li class="divider"></li>
      <li><a href="#">分离的链接</a></li>
   </ul>
</div>

</body>
</html>
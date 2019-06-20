<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 垂直的按钮组</title>
     <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="btn-group-vertical">
  <button type="button" class="btn btn-default">按钮 1</button>
  <button type="button" class="btn btn-default">按钮 2</button>

  <div class="btn-group-vertical">
    <button type="button" class="btn btn-default dropdown-toggle"        data-toggle="dropdown">
      下拉
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">下拉链接 1</a></li>
      <li><a href="#">下拉链接 2</a></li>
    </ul>
  </div>
</div>

</body>
</html>
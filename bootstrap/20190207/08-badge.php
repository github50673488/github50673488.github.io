<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 激活导航状态</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<h4>胶囊式导航中的激活状态</h4>
<ul class="nav nav-pills">
   <li class="active"><a href="#">首页 <span class="badge">42</span></a></li>
   <li><a href="#">简介</a></li>
   <li><a href="#">消息 <span class="badge">3</span></a></li>
</ul>
<br>
<h4>列表导航中的激活状态</h4>
<ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
   <li class="active">
      <a href="#">
         <span class="badge pull-right">42</span>
         首页
      </a>
   </li>
   <li><a href="#">简介</a></li>
   <li>
      <a href="#">
         <span class="badge pull-right">3</span>
         消息
      </a>
   </li>
</ul>

</body>
</html>
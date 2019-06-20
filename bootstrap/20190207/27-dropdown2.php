<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 下拉菜单（Dropdown）插件方法</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#">W3Cschool</a>
   </div>

   <div id="myexample">
      <ul class="nav navbar-nav">
         <li class="active"><a href="#">iOS</a></li>
         <li><a href="#">SVN</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle">Java <b                 class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a id="action-1" href="#">
                     jmeter</a>
                  </li>
                  <li><a href="#">EJB</a></li>
                  <li><a href="#">Jasper Report</a></li>
                  <li class="divider"></li>
                  <li><a href="#">分离的链接</a></li>
                  <li class="divider"></li>
                  <li><a href="#">另一个分离的链接</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
</div>
<script>
   $(function(){
      $(".dropdown-toggle").dropdown('toggle');
      }); 
</script>

</body>
</html>

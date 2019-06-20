<!DOCTYPE html><html><head>
   <title>Bootstrap 实例 - 输入框组的下拉菜单按钮</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </head><body><div style="padding: 100px 100px 10px;">
   <form class="bs-example bs-example-form" role="form">
      <div class="row">
         <div class="col-lg-6">
            <div class="input-group">
               <div class="input-group-btn">
                  <button type="button" class="btn btn-default 
                     dropdown-toggle" data-toggle="dropdown">
                     下拉菜单 
                     <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                     <li><a href="#">功能</a></li>
                     <li><a href="#">另一个功能</a></li>
                     <li><a href="#">其他</a></li>
                     <li class="divider"></li>
                     <li><a href="#">分离的链接</a></li>
                  </ul>
               </div><!-- /btn-group -->
               <input type="text" class="form-control">
            </div><!-- /input-group -->
         </div><!-- /.col-lg-6 --><br>
         <div class="col-lg-6">
            <div class="input-group">
               <input type="text" class="form-control">
               <div class="input-group-btn">
                  <button type="button" class="btn btn-default 
                     dropdown-toggle" data-toggle="dropdown">
                     下拉菜单 
                     <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right">
                     <li><a href="#">功能</a></li>
                     <li><a href="#">另一个功能</a></li>
                     <li><a href="#">其他</a></li>
                     <li class="divider"></li>
                     <li><a href="#">分离的链接</a></li>
                  </ul>
               </div><!-- /btn-group -->
            </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
   </form></div></body></html>
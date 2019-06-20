<!DOCTYPE html><html><head>
   <title>Bootstrap 实例 - 按钮（Button）插件方法</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head><body><h2>点击每个按钮查看方法效果</h2><h4>演示 .button('toggle') 方法</h4><div id="myButtons1" class="bs-example">
   <button type="button" class="btn btn-primary">原始</button></div><h4>演示 .button('loading') 方法</h4><div id="myButtons2" class="bs-example">
   <button type="button" class="btn btn-primary" 
      data-loading-text="Loading...">原始   </button></div><h4>演示 .button('reset') 方法</h4><div id="myButtons3" class="bs-example">
   <button type="button" class="btn btn-primary" 
      data-loading-text="Loading...">原始   </button></div><h4>演示 .button(string) 方法</h4><button type="button" class="btn btn-primary" id="myButton4" 
   data-complete-text="Loading finished">请点击我</button><script type="text/javascript">
   $(function () {
      $("#myButtons1 .btn").click(function(){
         $(this).button('toggle');
      });
   });
   $(function() { 
      $("#myButtons2 .btn").click(function(){
         $(this).button('loading').delay(1000).queue(function() {
         });        
      });
   });   
   $(function() { 
      $("#myButtons3 .btn").click(function(){
         $(this).button('loading').delay(1000).queue(function() {
            $(this).button('reset');
         });        
      });
   });  
   $(function() { 
      $("#myButton4").click(function(){
         $(this).button('loading').delay(1000).queue(function() {
            $(this).button('complete');
         });        
      });
   }); </script> </body></html>
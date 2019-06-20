<!DOCTYPE html><html><head>
   <title>Bootstrap 实例 - 提示工具（Tooltip）插件</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head><body><h4>提示工具（Tooltip）插件 - 锚</h4>这是一个 <a href="#" class="tooltip-test" data-toggle="tooltip" 
   title="默认的 Tooltip">
   默认的 Tooltip</a>.
这是一个 <a href="#" class="tooltip-test" data-toggle="tooltip" 
   data-placement="left" title="左侧的 Tooltip">
   左侧的 Tooltip</a>.
这是一个 <a href="#" data-toggle="tooltip" data-placement="top" 
   title="顶部的 Tooltip">
   顶部的 Tooltip</a>.
这是一个 <a href="#" data-toggle="tooltip" data-placement="bottom" 
   title="底部的 Tooltip">
   底部的 Tooltip</a>.
这是一个 <a href="#" data-toggle="tooltip" data-placement="right" 
   title="右侧的 Tooltip">
   右侧的 Tooltip</a><br><h4>提示工具（Tooltip）插件 - 按钮</h4><button type="button" class="btn btn-default" data-toggle="tooltip" 
   title="默认的 Tooltip">
   默认的 Tooltip</button><button type="button" class="btn btn-default" data-toggle="tooltip" 
   data-placement="left" title="左侧的 Tooltip">
   左侧的 Tooltip</button><button type="button" class="btn btn-default" data-toggle="tooltip" 
   data-placement="top" title="顶部的 Tooltip">
   顶部的 Tooltip</button><button type="button" class="btn btn-default" data-toggle="tooltip" 
   data-placement="bottom" title="底部的 Tooltip">
   底部的 Tooltip</button><button type="button" class="btn btn-default" data-toggle="tooltip" 
   data-placement="right" title="右侧的 Tooltip">
   右侧的 Tooltip</button><script>
   $(function () { $("[data-toggle='tooltip']").tooltip(); });</script></body></html>
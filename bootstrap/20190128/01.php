<!DOCTYPE html><!--HTML5 文档类型（Doctype）-->
<html><!--HTML5 文档类型（Doctype）-->
    <head>
        <title>Bootstrap 实例</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--为了让 Bootstrap 开发的网站对移动设备友好，确保适当的绘制和触屏缩放，需要在网页的 head 之中添加 viewport meta 标签-->
       <!--        width 属性控制设备的宽度。假设您的网站将被带有不同屏幕分辨率的设备浏览，那么将它设置为 device-width 可以确保它能正确呈现在不同设备上。
initial-scale=1.0 确保网页加载时，以 1:1 的比例呈现，不会有任何的缩放。-->
<!--       在移动设备浏览器上，通过为 viewport meta 标签添加 user-scalable=no 可以禁用其缩放（zooming）功能。
通常情况下，maximum-scale=1.0 与 user-scalable=no 一起使用。这样禁用缩放功能后，用户只能滚动屏幕，就能让您的网站看上去更像原生应用的感觉。 
       -->
       
<!--       <meta name="viewport" content="width=device-width,                                                           initial-scale=1.0,                                       
maximum-scale=1.0,                                       
user-scalable=no">-->
       
       <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  

        <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <h1>我的第一个 Bootstrap 页面</h1>
                <p>重置窗口大小，查看响应式效果！</p> 
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3>第一列</h3>
                    <p>第二列标题</p>
                </div>
                <div class="col-sm-4">
                    <h3>第二列</h3>
                    <p>第二列标题</p>
                </div>
                <div class="col-sm-4">
                    <h3>第三列</h3>        
                    <p>第二列标题</p>
                </div>
            </div>
        </div>
    </body>
</html><!--HTML5 文档类型（Doctype）-->
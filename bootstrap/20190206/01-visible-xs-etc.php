<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 实例 - 响应式实用工具</title>
        <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container" style="padding: 40px;">
            <div class="row visible-on">
                <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;          box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <span class="hidden-xs">特别小型</span>
                    <span class="visible-xs">✔ 在特别小型设备上可见</span>
                </div>
                <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;          box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <span class="hidden-sm">小型</span>
                    <span class="visible-sm">✔ 在小型设备上可见</span>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;          box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <span class="hidden-md">中型</span>
                    <span class="visible-md">✔ 在中型设备上可见</span>
                </div>
                <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;          box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <span class="hidden-lg">大型</span>
                    <span class="visible-lg">✔ 在大型设备上可见</span>
                </div>
            </div>
    </body>
</html>
<!DOCTYPE html><html><head>
        <title>Bootstrap 实例 - 带有下拉菜单的标签</title>
        <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head><body><p>带有下拉菜单的标签</p>

        <!--        <ul class="nav nav-tabs">-->
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">SVN</a></li>
            <li><a href="#">iOS</a></li>
            <li><a href="#">VB.Net</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Java <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Swing</a></li>
                    <li><a href="#">jMeter</a></li>
                    <li><a href="#">EJB</a></li>
                    <li class="divider"></li>
                    <li><a href="#">分离的链接</a></li>
                </ul>
            </li>
            <li><a href="#">PHP</a></li></ul></body></html>
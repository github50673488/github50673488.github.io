<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 实例 - 嵌套列</title>
        <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  

        <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Hello, world!</h1>
            <div class="row">
<!--                
                为了在内容中嵌套默认的网格，请添加一个新的 .row，并在一个已有的 .col-md-* 列内添加一组 .col-md-* 列。被嵌套的行应包含一组列，这组列个数不能超过12（其实，没有要求你必须占满12列）。
在下面的实例中，布局有两个列，第二列被分为两行四个盒子
                -->
                <div class="col-md-3" style="background-color: #dedef8;box-shadow: 
                     inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <h4>第一列</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="col-md-9" style="background-color: #dedef8;box-shadow: 
                     inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <h4>第二列 - 分为四个盒子</h4>
                    <div class="row">
                        <div class="col-md-6" style="background-color: #B18904;
                             box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                            <p>1
                            </p>
                        </div>
                        <div class="col-md-6" style="background-color: #B18904;
                             box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                            <p> 2
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" style="background-color: #B18904;
                             box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                            <p>3
                            </p>
                        </div>   
                        <div class="col-md-6" style="background-color: #B18904;
                             box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                            <p>4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
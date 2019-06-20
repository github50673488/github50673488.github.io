<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bootstrap 实例 - 列排序</title>
       <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  

        <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">  
            <h1>Hello, world!</h1>  
            
            <div class="row">     
                <p>排序前</p>     
                <div class="col-md-4" style="background-color: #dedef8;box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">我在左边</div>     
                <div class="col-md-8" style="background-color: #dedef8;box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">我在右边</div>  
            </div>
            
            <br>  
            
            <div class="row">     
                <p>排序后</p>     
                <div class="col-md-4 col-md-push-8" style="background-color: #dedef8;box-shadow: inset 1px -1px 1px #444,inset -1px 1px 1px #444;">我在左边</div>     
                <div class="col-md-8 col-md-pull-4" style="background-color: #dedef8;box-shadow: inset 1px -1px 1px #444,inset -1px 1px 1px #444;">我在右边</div>
            </div>
        </div>
    </body>
</html>
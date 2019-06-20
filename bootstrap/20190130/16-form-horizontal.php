<!DOCTYPE html>
<html>
    <head> 
        <title>Bootstrap 实例 - 水平表单</title> 
      <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" /> 
        <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script> 
        <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <form class="form-horizontal" role="form"> 
            <div class="form-group"> 
                <label for="firstname" class="col-sm-2 control-label">名字</label> 
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="firstname" placeholder="请输入名字" /> 
                </div> 
            </div> 
            <div class="form-group"> 
                <label for="lastname" class="col-sm-2 control-label">姓</label> 
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="lastname" placeholder="请输入姓" /> 
                </div> 
            </div> 
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <div class="checkbox"> 
                        <label> <input type="checkbox" /> 请记住我 </label> 
                    </div> 
                </div> 
            </div> 
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="submit" class="btn btn-default">登录</button> 
                </div> 
            </div>
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 偏移列</title>
   <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  

        <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

   <h1>Hello, world!</h1>

   <div class="row" >
<!--       我们有 <div class="col-md-6">..</div>，我们将使用 .col-md-offset-3 class 来居中这个 div。-->
       
      <div class="col-xs-6 col-md-offset-3" 
         style="background-color: #dedef8;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
            elit.
         </p>
      </div>

   </div>
</div>

</body>
</html>
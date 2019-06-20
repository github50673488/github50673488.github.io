<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 手机、平板电脑、台式电脑</title>
   <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  

        <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <h1>Hello, world!</h1>

   <div class="row">
<!--给我们提供了 3 中不同的列布局，分别适用于三种设备。在手机上，它将是左边 25% 右边 75% 的布局。在平板电脑上，它将是 50%/50% 的布局。在大型视口的设备上，它将是 33%/66% 的布局。-->
      <div class="col-sm-3 col-md-6 col-lg-8"  
         style="background-color: #dedef8; 
         box-shadow: inset 1px -1px 1px #444, 
         inset -1px 1px 1px #444;">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
            enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. 
         </p>

         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
            quae ab illo inventore veritatis et quasi architecto beatae vitae 
            dicta sunt explicabo. 
         </p>
      </div>

      <div class="col-sm-9 col-md-6 col-lg-4" 
         style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, 
         inset -1px 1px 1px #444;">
         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
            accusantium doloremque laudantium.
         </p>

         <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
            consectetur, adipisci velit, sed quia non numquam eius modi 
            tempora incidunt ut labore et dolore magnam aliquam quaerat 
            voluptatem. 
         </p>
   </div>
</div>

</body>
</html>
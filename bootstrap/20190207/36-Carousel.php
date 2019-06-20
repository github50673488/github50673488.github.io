<!DOCTYPE html><html><head>
   <title>Bootstrap 实例 - 简单的轮播（Carousel）插件</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head><body><div id="myCarousel" class="carousel slide">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="https://c2.staticflickr.com/8/7888/39970886643_f46a17590a_q.jpg" alt="First slide">
      </div>
      <div class="item">
         <img src="https://c2.staticflickr.com/8/7888/39970886643_f46a17590a_q.jpg" alt="Second slide">
      </div>
      <div class="item">
         <img src="https://c2.staticflickr.com/8/7888/39970886643_f46a17590a_q.jpg" alt="Third slide">
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a></div> </body></html>
<!DOCTYPE html>
<html>
  
  <head>
    <title>Bootstrap 实例 - 表单控件大小</title>
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head>
<!--  表单控件大小

您可以分别使用 class .input-lg 和 .col-lg-* 来设置表单的高度和宽度。下面的实例演示了这点：-->
  <body>
    <form role="form">
      <div class="form-group">
        <input class="form-control input-lg" type="text" placeholder=".input-lg"></div>
      <div class="form-group">
        <input class="form-control" type="text" placeholder="默认输入"></div>
      <div class="form-group">
        <input class="form-control input-sm" type="text" placeholder=".input-sm"></div>
      <div class="form-group"></div>
      <div class="form-group">
        <select class="form-control input-lg">
          <option value="">.input-lg</option></select>
      </div>
      <div class="form-group">
        <select class="form-control">
          <option value="">默认选择</option></select>
      </div>
      <div class="form-group">
        <select class="form-control input-sm">
          <option value="">.input-sm</option></select>
      </div>
      <div class="row">
        <div class="col-lg-2">
          <input type="text" class="form-control" placeholder=".col-lg-2"></div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder=".col-lg-3"></div>
        <div class="col-lg-4">
          <input type="text" class="form-control" placeholder=".col-lg-4"></div>
      </div>
    </form>
  </body>

</html>
<?php
$uname= $_POST['s'];
header('Content-type:text/json');
$arr = array ('content'=>$uname,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
echo json_encode($arr);

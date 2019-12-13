<?php
include_once "base.php";
$data['acc']=$_POST['acc'];
$data['pw']=$_POST['pw'];
$data['name']=$_POST['name'];
$data['sex']=$_POST['sex'];
$data['addr']=$_POST['addr'];
$data['tel']=$_POST['tel'];
$data['birthday']=$_POST['birthday'];
$data['email']=$_POST['email'];

if(insert("user",$data)){
    //echo "註冊 成功";
   header("location:index.php?s=1");
}else{

    header("location:reg.php?s=2");
}
?>
<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/
include_once "base.php";


$acc=$_POST['acc'];
$pw=$_POST['pw'];
// $acc='A';
// $pw='111';

echo $acc."<br>".$pw."<br>" ;


//$sql="select count(*) as 'r' from user where acc='$acc' &&  pw='$pw'";
$sql="select id from user where acc='$acc' &&  pw='$pw'";

//$data=$pdo->query($sql)->fetchColumn();
$data=$pdo->query($sql)->fetch();


echo '<br>id='.$data['id'].'<br>';

if(!empty($data)){
  echo "登入成功";
  $_SESSION['login']=1;
  $_SESSION['id']=$data['id'];
  header("location:resumes.php");
}else{
  echo "登入失敗";
  header("location:index.php?err=1");
}


?>
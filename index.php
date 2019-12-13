<?php
session_start();
if(!empty($_SESSION['login'])){
  header("location:resumes.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>履歷登入系統</title>
  <link rel="stylesheet" href="style.css">
  <script src="./css/jquery-1.9.1.min.js"></script>
</head>
<body style='background:#196d94'>

<div class="index_title">
  <p>履歷表系統</p>
  <p style='color:#c96'>會員登入</p>
  <p id="info" style="color:red;font-size:24px"></p>
</div>

<?php
    if(!empty($_GET['s'])){
?>
<script>
      $("#info").html("註冊成功，請輸入帳密以登入");
</script>  
<?php
    }
    if(!empty($_GET['err'])){
?>
<script>
    $("#info").html('帳號或密碼錯誤，請重新輸入');
</script> 
<?php  }  ?>

<form action="login.php" method="post"> 
<table class="wrapper">
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
        <input type="submit" value="登入">
        <input type="reset" value="重置">
    </td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
      <a href="reg.php" class="reg"><h2> 沒有帳號? 按這裡註冊會員</h2></a> 
      <!-- <a href="forget.php" class="reg">忘記密碼</a> -->
    </td>
  </tr>
</table>
</form>   
</body>
</html>

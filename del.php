<?php
    include_once "base.php";
    $id=$_SESSION['id'];
    echo $id."<br>";
    echo $_SESSION['login'];
    echo $_SESSION['id'];

    $sql="DELETE FROM user WHERE id='$id'";
    // echo $sql;
    $pdo->exec($sql);
    // echo "<a href='index.php'>已刪除資料,回登入畫面</a>";
    unset($_SESSION['login']);
    header("location:index.php");

    

?>
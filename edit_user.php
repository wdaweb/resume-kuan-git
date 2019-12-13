<?php
    include_once "base.php";
    
    $pw=$_POST['pw'];
    $name=$_POST['name'];
    $addr=$_POST['addr'];
    $tel=$_POST['tel'];
    $birthday=$_POST['birthday'];
    $email=$_POST['email'];
    $text=$_POST['text'];
    $id=$_POST['id'];

    // echo $text. "<br>";
    //UPDATE user SET `acc`='uf',`pw`=444,`name`='FFF' WHERE `id`=1
    $sql="update user set pw='$pw',name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email' ,text='$text' where id='$id'";
// echo $sql;
// $pdo->exec($sql) ;
    if($pdo->exec($sql)){
        header("location:resumes.php");

    }else{
        echo "未完成";
    }
        // echo "<a href='resumes.php'>編輯完成，回會員首頁</a>";

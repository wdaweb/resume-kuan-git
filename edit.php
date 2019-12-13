<?php
    include_once 'base.php' ;
    $i=$_SESSION['id'] ;
    $sql="select * from user where id='$i'";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC) ;

    $row=$rows[0] ;
    // print_r($rows) ;
?>  

<form action="edit_user.php" method="post">
    <table class="wrapper">
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="" value="<?=$row['acc'];?>"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="text" name="pw" id="" value="<?=$row['pw'];?>"></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" id="" value="<?=$row['name'];?>"></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><input type="text" name="sex" id="" value="<?=$row['sex'];?>"></td>
        </tr>
        <tr>
            <td>住址</td>
            <td><input type="text" name="addr" id="" value="<?=$row['addr'];?>"></td>
        </tr>
        <tr>
            <td>電話</td>
            <td><input type="text" name="tel" id="" value="<?=$row['tel'];?>"></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type="text" name="birthday" id="" value="<?=$row['birthday'];?>"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" id="" value="<?=$row['email'];?>"></td>
        </tr>
        <tr>
            <td>介紹</td>
            <td><input type="text" name="text" id="" value="<?=$row['text'];?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?=$row['id'];?>">
                <input type="submit" value="編輯">
            </td>
        </tr>
    </table>
</form>

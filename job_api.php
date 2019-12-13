<?php
    include_once "base.php" ;

    $i=$_SESSION['id'];
    $p=$_GET['page'];
    // echo $i."<br>".$p."<br>" ;
    $sql="select $p from job where id='$i'" ;
    $row=$pdo->query($sql)->fetch() ;
    echo $row[$p];
    // print_r($row) ;

?>
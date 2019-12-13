<?php
    include_once "base.php" ;
    $id=7 ;
    $sql="select * from img where belong='$id' " ;
    $phot=$pdo->query($sql)->fetch() ;

    echo $phot['path']."<hr>" ;
    print_r($phot) ;

    unlink($phot['path']);
?>




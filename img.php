<?php
    include_once "base.php" ;
    $bel=$_SESSION['id'] ;

    if(!empty($_FILES) && $_FILES['file']['error']==0){
        
        $type=$_FILES['file']['type'];
        $filename=$_FILES['file']['name'];
        $path="./upload/" . $filename;

        if (!empty($_POST['path'])) {
            
            $id=$_POST['id'];
            $pa=$_POST['path'] ;
            unlink($pa);
    // echo "path: "."$pa"."<br>";

            
            
            $sql="UPDATE `img` SET `name`='$filename',`path`='$path' WHERE id='$id' ";
            $res=$pdo->exec($sql);
        }else{
            $path="./upload/" . $filename;
            $sql="insert into img (`belong`,`name`,`type`,`path`) values('$bel','$filename','$type','$path')";
            $result=$pdo->exec($sql);
        }
        
        move_uploaded_file($_FILES['file']['tmp_name'],$path);

    }
    
?>




<?php        
// echo "note- ".$note."<br>";
// echo "type- ".$type."<br>";
// echo "fileName- ".$filename."<br>";


        //實體檔案上傳到 路徑指定的位置
        // move_uploaded_file($_FILES['file']['tmp_name'] , $path);
        //將資料表的欄位訊息更新
    //     $sql="insert into img (`belong`,`name`,`type`,`path`) values('$bel','$filename','$type','$path')";
    //     $result=$pdo->exec($sql);
    
    //     if($result==1){ echo "上傳成功";
    
    //     }else{  echo "DB有誤"; }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>相片管理</title>
        <link rel="stylesheet" href="style.css">
        <style>
        a{
            display: inline-block;
            border: 1px solid #ccc;
            padding: 5px 15px;
            border-radius: 20px;
            box-shadow: 1px 1px 3px #ccc;
        }
        
        </style>
    </head>
    <body>

        <h1 class="header">內容及相片管理</h1>
        <h3>相片更新：</h3>
<?php    
        $sql="select * from img where belong='$bel' " ;
        $exis=$pdo->query($sql)->fetch() ;
?>        
        
        <form action="img.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" value="選擇相片檔案" >
            <input type="hidden" name="path" value="<?=$exis['path'];?>" >
            <input type="hidden" name="id" value="<?=$exis['id'];?>" >
            <input type="submit" value="上傳">
        </form>
        <img src="<?=$exis['path'];?>" alt="" width=100px style="margin:50px">

        <a href="resumes.php">回首頁</a>
        <div>
    <!-- <table>
        <tr>
            <td> -->
                <!-- <a href="edit_file.php?id==$file['id'];?>">更新檔案</a>
                <a href="del_file.php?id==$file['id'];?>">刪除檔案</a> -->
            
            <!-- </td>
        </tr>
    </table> -->
    
        </div>
    </body>
    </html>
<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumes</title>
    <!-- <link rel="stylesheet" href="./css/css.css"> -->
    <script src="./css/jquery-1.9.1.min.js"></script>
    <script src="./css/js.js"></script>
    <style>
        *{
            color: rgb(138, 78, 78);
        }
        #layout{
            width:1200px;
            height:900px;
            /* float:left; */
            border:#83cDD4 3px ;
        }
        #menu{
            width:18%;
            height:900px;
            float:left;
            /* background-size:cover; */
            background-color:#008797 ;
            /* background-repeat:no-repeat; */
        }
        .menu{
            font-size:24px;
            color: #FFFFFF;
        }
        
        #header{
            float:left ;
            width:80% ;
            height:30% ;
            position:relative ;
            background-color:#83cDD4 ;
            margin:0px;
        }
        #view{
            float:left ;
            width:80% ;
            height:70% ;
            position:relative ;
            background-color:#0ab;
        }
        li{
            font: outline;
            font-size: 30px;
            color: #edb;
            list-style-type:none ;
            position:relative ;
            left:80px ;
        }
        #name{
            font-size:120px;margin:0
            position:relative;
            float:left;
        }
        .profile{
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
            position:relative;
            float:left;
        }
        #pho{
            width:200px ;
            position:relative;
            float:right;
        }
    </style>
</head>

<body>
<?php
    $id=$_SESSION['id'];
    // $id=6 ;
    $sql="select * from user where id='$id' ";
    $data=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $data=$data[0] ;
    $acc=$data['acc'];
    $name=$data['name'];
    $sex =$data['sex'];
    $addr =$data['addr'];
    $tel =$data['tel'];
    $email =$data['email'];
    $text =$data['text'];
    $sql2="select path from img where belong='6'" ;
    $po=$pdo->query($sql2)->fetch();
    $path=$po['path'] ;
    // echo $text ;
?>
    <div id="layout">

        <div id="menu">
            <div class='menu'>簡介personal</div>
            <div class='menu'>求職目標objective</div>
            <div class='menu'>技能專長skills</div>
            <div class='menu'>學歷education</div>
            <div class='menu'>工作經歷experience</div>
            <input type="button" value="登出" onclick="location.href='./logout.php';">
            <input type="button" value="相片管理" onclick="location.href='./img.php';">
            <input type="button" value="編輯會員資料" onclick="location.href='./edit.php';">
            <input type="button" value="刪除會員資料" onclick="location.href='./del.php';">
        </div>

        <div id="header">
            <p id="name"><?=$acc;?></p>
            <p class="profile">
                姓名:<?=$name;?><br>
                性別:<?=$sex;?> <br>
                居住地:<?=$addr;?> <br>
                電話:<?=$tel;?> <br>
                e-mail: <?=$email;?> <br>
            </p>
            <img src="<?=$path;?>" id="pho">
        </div>
        <div id="view">
            <br><br><br><br><br><br>
<?php
        $itduc=explode(",",$text) ;
        foreach ($itduc as $k => $v) {
?>
          <li class='intro'><?=$v;?></li> 
<?php                   
        }
?>

        </div>
    </div>

    <script>
        
        $('.menu').eq(0).on('click',function(){
            
            console.log($('.menu').eq(0).text());
        })
        $('.menu').eq(1).on('click',function(){
            $('.intro').html("") ;
            let page="objective" ;
            query(page);
            // console.log($('.menu').eq(1).text());
        })
        $('.menu').eq(2).on('click',function(){
            console.log($('.menu').eq(2).text());
        })
        $('.menu').eq(3).on('click',function(){
            console.log($('.menu').eq(3).text());
        })
        $('.menu').eq(4).on('click',function(){
            console.log($('.menu').eq(4).text());
        })


        //----------------------------------------

        function query(p){
            $.get("./job_api.php",{"page":p},function(res){
                $('.intro').html(res) ;
            })
        }
    </script>
</body>
</html>


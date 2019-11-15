<?php
session_start();
if(empty($_SESSION)) header('location:index.php');
// var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="template/T4.css">
  <link rel="stylesheet" href="template/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=McLaren|Noto+Sans+TC&display=swap" rel="stylesheet">
</head>

<body>
  <div class="business-card">
    <div class="flipper">
      <div class="front">
        <div class="name">
          <span class="first"><?=$_SESSION['name']?></span> 
          <span class="title"><?=$_SESSION['position']?></span>
        </div>
      </div>
      <div class="back">
        <div class="left">
          <!-- 左邊內容 -->
          <img src="imgs/<?= time() ?>_<?=$_SESSION['photo']['name']?>" class="cir-pic">
        </div>
        <div class="right">
          <!-- 右邊內容 -->
          <p>
          <i class="fas fa-suitcase"></i>
          <span class="right-content"><?=$_SESSION['skills']?></span>
          </p>
          <p>
          <i class="fas fa-envelope"></i>
          <span class="right-content"><?=$_SESSION['email']?></span>
          </p>
          <p>
          <i class="fas fa-phone-alt"></i>
          <span class="right-content"><?=$_SESSION['phone']?></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
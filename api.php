<!-- 
copy($_FILES['photo']['tmp_name'],"imgs/".time()."_".$_FILES['photo']['name']);
$content=$_POST;
$content['photo']=$_FILES['photo']['name'];
var_dump($content);
session_start();
$_SESSION['content']=$content;

header('location:preview.php');
// 還沒有下一個防呆轉址 -->


<?php
if(!empty($_POST)){
    if(isset($_POST['Name'])){
    copy($_FILES['photo']['tmp_name'],"imgs/".time()."_".$_FILES['photo']['name']);
    session_start();
    $_SESSION['name']=$_POST['Name'];
    $_SESSION['position']=$_POST['Position'];
    $_SESSION['skills']=$_POST['Skills'];
    $_SESSION['phone']=$_POST['Phone'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['template']=$_POST['Template'];
    $_SESSION['photo']['name']=$_FILES['photo']['name'];
    $_SESSION['photo']['tmp_name']=$_FILES['photo']['tmp_name'];    
    header('location:preview.php');
    }else{
        header('location:window.history.back()');
    }
}else{
    header('location:index.php');
}
?>

<?php 
include_once "db.php";
//取得資料表名稱
$table=$_POST['table'];

//將資料表名稱轉成首字大寫的資料表物件變數
$DB=${ucfirst($_POST['table'])};

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

unset($_POST['table']);
$DB->save($_POST);

to("../back.php?do=$table");
?>
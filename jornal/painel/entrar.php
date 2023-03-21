<?php 
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
// $con = md5($senha);

$connect = new mysqli("localhost","root","","noticia");
$result = $connect->query("SELECT * FROM `loginf` WHERE `login` = '$login' AND `senha` = '$senha'");

if(mysqli_num_rows($result) > 0 ){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:site.php');
}else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

?>
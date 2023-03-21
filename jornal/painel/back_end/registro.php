<?php 
require_once("connect.php");

if($_POST){
    $nome = $_POST['login'];
    $senha = $_POST['senha'];
    // $con = md5($senha);

    $sql = "INSERT INTO loginf VALUES
    (0,'$nome','$senha');";

    if($connect->query($sql) === TRUE){
        echo "Cadastro feito com sucesso."."<br>";
        echo "<a href='../login.php'>Voltar</a>";
        
    }else{
        die("Erro".$sql.$connect->connect_error);
    }
}


?>
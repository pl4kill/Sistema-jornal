<?php 
require_once("connect.php");
session_start(); 
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];

$sql = "SELECT * FROM loginf WHERE `login` = '$login' AND `senha` = '$senha'";

$result = $connect->query($sql);

if($result -> num_rows > 0){
    while($linha = $result -> fetch_assoc()){
        
        $id_f = $linha['id'];

    
    }
}

if($_POST){
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];
    $time = new datetime('now');
    $data = $time->format('d/m/Y H:i');

    $sql = "INSERT INTO noticia VALUES (0,'$titulo','$noticia','$data','$id_f')";

    if($connect ->query($sql) === TRUE){
        echo "Noticia cadastrada com sucesso.";
        echo "<a href='../site.php'>Voltar</a>";
    }else{
        die("Erro".$sql.$connect -> connect_error);
    }
}
?>
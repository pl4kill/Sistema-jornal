<?php
$localhost = "localhost";
$username="root";
$password = "";
$dbname = "noticia";

//criar minha conexão
$connect = new mysqli($localhost,$username,$password,$dbname);

//checar a conexão
if($connect -> connect_error){
die ("A conexão falhou: ".$connect -> connect_error);
}else{
echo "";
}
?>
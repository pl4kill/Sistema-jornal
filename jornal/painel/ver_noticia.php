<style>
  button{
    font-family:Arial, Helvetica, sans-serif;
  }
  body{
    background: linear-gradient(170deg, #127465, #fff);
    background-repeat: no-repeat;
    min-height: 50vh;
    min-width: 50vw;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family:Arial, Helvetica, sans-serif;
  }
  a{

    text-decoration: none;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
  }
  .button {
  display: inline-block;
  border-radius: 10px;
  background-color: #127465;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button:hover span {
  padding-right: 25px;
}
.button:hover span:after {
  opacity: 1;
  right: 0;
}
a{
  color: #fff;
}
</style>
<!-- Fazer sessão com o login para vê sua noticia -->
<?php
session_start();
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];
?>


<table>
<?php

require_once ("back_end/connect.php");

    $sql="SELECT  n.titulo,n.noticia,u.login,n.data  
    from noticia as n,loginf as u 
    WHERE u.id=n.id_func AND u.login='$login' and u.senha='$senha' order by n.data";

$result = $connect->query($sql);
if($result->num_rows > 0){
    while($linha = $result->fetch_assoc()){


        echo "<tr><th>Titulo: ".$linha['titulo'];
        echo "<br>";
        echo "<tr><th>noticia: ".$linha['noticia'];
        echo "<br>";
        echo "<tr><th>data: ".$linha['data'];
        echo "<br>";
        echo "<tr><th>autor: ".$linha['login'];
        echo "<br><br>";
        echo "<br><br>";
        
        }
      
    }else{
      echo "<h1>"."Não foi cadastrada nenhuma notícia<br>Clique aqui para cadastrar sua primeira notícia: "."<br>"."</h1>";
    }

?>
<button type="button" class="button" style="vertical-align:middle"><span><a href="c_noticia.php">Cadastrar</a></span></button><p>
</table>
<button type="button" class="button" style="vertical-align:middle"><span><a href="site.php">Voltar</a></span></button><p>
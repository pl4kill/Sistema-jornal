<?php
session_start();
if((!isset ($_SESSION['login']) == true) || (!isset ($_SESSION['senha']) == true))
{
  header('location:../index.php');
  }

$logado = $_SESSION['login'];
?>
<h1 id="logo">Você foi logado com sucesso, <?php echo "$logado"; ?></h1>
<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
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
    color: #fff;
    font-family: Arial, Helvetica, sans-serif;
  }
  .button {
  display: inline-block;
  border-radius: 15px;
  background: #16907d;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 21px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px;
  font-family: Arial, Helvetica, sans-serif;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  font-family: Arial, Helvetica, sans-serif;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  font-family: Arial, Helvetica, sans-serif;
}
.button:hover span {
  padding-right: 25px;
  font-family: Arial, Helvetica, sans-serif;
}
.button:hover span:after {
  opacity: 1;
  right: 0;
  font-family: Arial, Helvetica, sans-serif;
}
#logo{
  position: absolute;
  top: 360;
}

</style>
<body>
<button type="button" class="button" style="vertical-align:middle"><span><a href="ver_noticia.php">Ver noticia</a></span></button><p>
<button type="button" class="button" style="vertical-align:middle"><span><a href="c_noticia.php">Cadastrar noticia</a></span></button><p>
<button type="button" class="button" style="vertical-align:middle"><span><a href="sair.php">Sair</a></span></button><p>
</body>
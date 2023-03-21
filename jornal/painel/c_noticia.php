<?php 
require_once("back_end/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar noticia</title>
    <style>
        a{
            text-decoration: none;
            background-color: #127465;
            color: #FFFFFF;
        }
        body{
    background: linear-gradient(170deg, #127465, #fff);
    background-repeat: no-repeat;
    min-height: 98vh;
    min-width: 95vw;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: "Poppins", sans-serif;
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
#i{
  width:400px
}
#b{
    position: absolute;
  top: 680;
  left: 999;
}
    </style>
</head>
<body>
    <form action="back_end/c_noticia.php" method="POST">
    <label>Titulo: </label>
    <input type="text" name="titulo" id="i"><p></p><br/>

    <label>Noticia: </label>
     <textarea name="noticia" cols="50" rows="20"></textarea><p></p>


    <button type="submit" class="button" id="a" style="vertical-align:middle"><span>Cadastrar</span></button>
    <button type="button" class="button" id="b" style="vertical-align:middle"><span><a href="site.php">Voltar</a></span></button><p>
</form>
</body>
</html>


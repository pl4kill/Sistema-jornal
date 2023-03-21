<?php  require_once("painel/back_end/connect.php"); 

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style/index.css">
    <header>
        <section>
            <h2 class="logo" id="logo">DIARIOgl</h2>
    </section>

    <ul class="nav-list" id='nav'>
    <li><a href = "painel/login.php"  role="button" id='button'><i class='bx bx-user-plus' id="icon"> Entrar</a></li></i>
    </ul>
    </header>

    <h1> Ultimas notícias </h1>
    <table>
    <?php 
    $sql="SELECT  n.noticia,n.titulo,u.login,n.data  
    from noticia as n,loginf as u 
    WHERE n.id_func = u.id order by n.data desc ";
    
    $result = $connect -> query($sql);
    echo "<style> 
    
        table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
         thead th{
            background: #ddd;
         }
    </style>
    <body>";
    echo "<table>";
    if($result -> num_rows > 0){
        while($linha = $result -> fetch_assoc()){
            
            echo "<thead><tr>";
            echo "<th>Título:  ".$linha['titulo']."</th>";
            echo "</tr></thead>";
            echo "<tbody><tr>";
            echo "<td>Notícia:  ".$linha['noticia']."</td>";
            echo "</tr><tr>";
            echo "<td>Data:  ".$linha['data']."</td>";
            echo "</tr><tr>";
            echo "<td>Autor:  ".$linha['login']."</td>";
            echo "</tr></tbody>";
        }
        
    }
    echo "</table></body>";
    ?>
</table>
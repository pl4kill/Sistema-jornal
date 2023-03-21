<?php 
require_once("back_end/connect.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>Login cadastro</title>
    <link rel="stylesheet" href="style.css">
<style>
    *{
    margin: 0;
    border: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background: linear-gradient(170deg, #127465, #fff);
    background-repeat: no-repeat;
    min-height: 100vh;
    min-width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
}

main.container {
    background: white;
    min-width: 320px;
    min-height: 20vh;
    padding: 2rem;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
}

main h2 {
    font-weight: 600;
    margin-bottom: 2rem;
    position: relative;
}

main h2::before {
    content: '';
    position: absolute;
    height: 4px;
    width: 25px;
    bottom: 3px;
    left: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, #127465, #127465);
}

form {
    display: flex;
    flex-direction: column;
}

.input-field {
    position: relative;
}

form .input-field:first-child {
    margin-bottom: 1.5rem;
}

.input-field .underline::before {
    content: '';
    position: absolute;
    height: 1px;
    width: 100%;
    bottom: -5px;
    left: 0;
    background: rgba(0, 0, 0, 0.2);
}

.input-field .underline::after {
    content: '';
    position: absolute;
    height: 1px;
    width: 100%;
    bottom: -5px;
    left: 0;
    background: linear-gradient(0deg, #127465, #127465);
    transform: scaleX(0);
    transition: all .3s ease-in-out;
    transform-origin: left;
}

.input-field input:focus ~ .underline::after {
    transform: scaleX(1);
}

.input-field input {
    outline: none;
    font-size: 0.9rem;
    color: rgba(0, 0, 0, 0.7);
    width: 100%;
}

.input-field input::placeholder {
    color: rgba(0, 0, 0, 0.5);
}

form input[type="submit"] {
    margin-top: 2rem;
    padding: 0.4rem;
    width: 100%;
    background: linear-gradient(0deg, #127465, #127465);
    cursor: pointer;
    color: white;
    font-size: 0.9rem;
    font-weight: 300;
    border-radius: 4px;
    transition: all 0.3s ease;
}

form input[type="submit"]:hover {
    letter-spacing: 0.5px;
    background: linear-gradient(0deg, #127465, #127465);
}
form button[type="button"]:hover {
    letter-spacing: 0.5px;
    background: linear-gradient(to right, #4776E6, #8e54e9);
}
form button[type="button"] {
    margin-top: 2rem;
    padding: 0.4rem;
    width: 100%;
    background: linear-gradient(to left, #4776E6, #8e54e9);
    cursor: pointer;
    color: white;
    font-size: 0.9rem;
    font-weight: 300;
    border-radius: 4px;
    transition: all 0.3s ease;
}
form input[h="submit"]:hover {
    letter-spacing: 0.5px;
    background: linear-gradient(0deg, #127465, #127465);
}
form button[type="button"]:hover {
    letter-spacing: 0.5px;
    background: linear-gradient(to right, #4776E6, #8e54e9);
}
form button[type="button"] {
    margin-top: 2rem;
    padding: 0.4rem;
    width: 100%;
    background: linear-gradient(to left, #4776E6, #8e54e9);
    cursor: pointer;
    color: white;
    font-size: 0.9rem;
    font-weight: 300;
    border-radius: 4px;
    transition: all 0.3s ease;
}
a{
    text-decoration: none;
    color: #127465;
    background-color: white;
}

</style>
</head>
<body>
    <main class="container">
        <h2>Cadastrar</h2>
        <form action="back_end/registro.php" method="POST">
            <div class="input-field">
                <input type="text" name="login" id="username"
                    placeholder="Crie um nome de usuario">
                <div class="underline"></div>
            </div>
            <div class="input-field"><span class="lnr lnr-eye"></span>
                <input type="password" name="senha" placeholder="Digite sua senha">
                <div class="underline"></div>
            </div>

            <input type="submit"><p>
        </form>
        <p></p><p></p><button type="button"><a href='login.php'>Voltar</button></a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>



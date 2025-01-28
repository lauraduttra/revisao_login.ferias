<?php
session_start();
include('conexao.php');  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];  
    $senha = $_POST['senha'];  

    $sql = "SELECT * FROM usuários WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($senha == $row['senha']) {
            header("Localização: index.html");
            exit;
        } 
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> <
    meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, escala inicial=1.0">
    <title>Logint</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class='login'>
    <header>
        <h1>Descubra como foram as minhas férias de verão! 🎀</h1>
        <p>Por Laura</p>
    </header>
    <br><br><br>
    <div class="container" style="width: 300px;">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <button type="submit" style="margin-bottom:40px;">Entrar</button>
        </form>
    </div>
</body>
</html>
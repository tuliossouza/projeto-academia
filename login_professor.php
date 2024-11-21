<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Professor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login Professor</h1>
    <form action="home_professor.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
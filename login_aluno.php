<?php
// Usuário e senha pré-definidos
$usuario_predefinido = 'teste';
$senha_predefinida = '123';

// Variável para armazenar a mensagem de erro
$mensagem_erro = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se o usuário e a senha estão corretos
    if ($usuario === $usuario_predefinido && $senha === $senha_predefinida) {
        // Redireciona para outra página
        header('Location: home_aluno.php');
        exit();
    } else {
        $mensagem_erro = 'Usuário ou senha incorretos!';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login Aluno</h1>
    <form action="" method="post">
        <h1>LOGIN</h1>
        <?php if ($mensagem_erro): ?>
            <div class="erro"><?php echo htmlspecialchars($mensagem_erro); ?></div>
        <?php endif; ?>
        <input required type="text" id="usuario" name="usuario" placeholder="USUARIO"><br>
        <input required type="password" id="senha" name="senha" placeholder="SENHA"><br><br>
        <input type="submit" value="Acessar">
    </form>
</body>
</html>

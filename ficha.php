<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ficha do Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ficha do Aluno</h1>
    <form action="salvar_ficha.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br>
        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" required>
        <br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>

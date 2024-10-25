<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo Classe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cores.css">
</head>
<body>
    <header>
        <h1>Olá bem-Vindo à nossa página</h1>
        <h2>Conclua o formulario a seguir</h2>
    </header>
    <main>
        <img src="img/mine.jpeg" height="450px" class="foto1">
        <div class="formulario">
        <form action="">
            <label for="name" class="focus">Nome:</label>
            <input type="text" name="" id="name" placeholder="Insira seu nome" required><br><br>
            <label for="email" class="focus">Email:</label>
            <input type="text" name="email" id="email" placeholder="Insira seu email" required><br><br>
            <label for="tel" class="focus">Telefone:</label>
            <input type="tel" name="tel" id="tel" placeholder="Insira seu telefone" required><br><br>
            <label for="mensagem" class="focus">mensagem:</label>
            <textarea name="mensagem" placeholder="Digite aqui uma mensagem" rows="9" cols="30"></textarea><br><br>
            <center><input type="submit" value="Cadastrar" class="buttom" ></center>
        </form>
        </div>
        <a href="entrar.php"><input type="submit" value="login" class="login_b"></a>
        </form>
    </main>
</body>
</html>
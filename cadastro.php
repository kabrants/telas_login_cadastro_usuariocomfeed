<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se | Seeya</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="main-content">
    <a href="#" class="logo">
            <img src="img/logoseeya.png" alt="Logo">
        </a>
        <div class="cadastro">
      <div class="cad" id="cadastro">
        <h1>Cadastre sua conta</h1>
        <form action="cadastro.php" method="post">
          <input type="text" id="login" name="login" placeholder="Digite seu Login"> <br>
          <input type="password" id="senha" name="senha" placeholder ="Digite uma senha segura"> <br>
          <input type="email" id="email" name="email" placeholder="Digite seu e-mail"> <br>
          <input type="submit" name="submit" id="b-cadastro" value="Cadastrar">
          <a href="index.php" id="back" class="back"> Voltar</a>
        </form>
      </div>
    </div>
</div>
</body>

</html>
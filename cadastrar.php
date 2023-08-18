<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">


<?php
session_start(); //Iniciar a sessao
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Cadastrar usuarios</title>
</head>

<body>

<div class="container">

      <h1>Cadastrar Usuário</h1>

	<div class="center-form">
   
    
    
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>


    <form method="POST" action="processa.php">
        <h3>Dados</h3>

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do usuário"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="E-mail do usuário"><br><br>

        <label>telefone: </label>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone"><br><br>

        <label>Endereco: </label>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço"><br><br>

       


        <button type="submit" class="btn btn-primary" value="Cadastrar" name="CadUsuario">Cadastrar</button>

    
    </form>
    <a href="index.php">
        <button type="button" class="btn-close" disabled aria-label="Close"></button>
  	    </a> 
        
    

    </div>

    </div>
</body>

</html>
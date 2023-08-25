<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">



<?php
session_start(); //Iniciar a sessao

include_once "conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id ";

$result = $this->mysql->$conn->query($sql);
?>
<!DOCTYPE HTML>
<html lang="pt-br">


<div>

</div>
<head>
    <meta charset="utf-8">
    <title>Usuários</title>
</head>

<body>

<!--<button href="index.php" class="btn btn-outline-primary">Listar</button> -->


    <h1>Lista de fornecedores</h1>    


	<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
	  <th scope="col">Telefone</th>
	  <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
  <?php
while($user_data = mysqli_fetch_assoc($result))
{
	
	echo "<tr>";
	echo "<td>".$user_data['id']."</td>";
	echo "<td>".$user_data['nome']."</td>";
	echo "<td>".$user_data['email']."</td>";
	echo "<td>".$user_data['telefone']."</td>";
	echo "<td>".$user_data['endereco']."</td>";
}
?>
    </tr>
  </tbody>
</table>


<a href="cadastrar.php">
    <button id="bcadastrar" class="btn btn-outline-primary">Cadastrar</button>
  	</a> 
	</div>
   
    
</body>

</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
	<main class="cadastro">
    <div class="container">
      <h1 class="login__title">Cadastrar</h1>
	  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
      <form class="form" method="POST" action="processa.php">
	  <input class="input"type="text" name="nome" placeholder="Digite o nome completo"/>
	  <span class="input-border"></span>
        <input class="input" type="email" name="email" placeholder="e-mail" />
        <span class="input-border"></span>
        <button class="submit">Cadastrar</button>
      </form>
	  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
    </div>
  </main>
	</body>
</html>
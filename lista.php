
    <div class=tudo><?php
     include("conecta.php");
    $comando = $pdo->prepare("SELECT * FROM cadastro");
    $resultado = $comando->execute();
    while( $linhas = $comando->fetch() )
    {
    
        $Usuario =  $linhas["nome"];
        $Senha =  $linhas["email"];
        $City =  $linhas["telefone"];
  
        
        echo( "Nome: $Usuario / Email: $Senha / Telefone: $City <br>");
    
    }
    ?>
    <?php
  include("conecta.php");
    $nome="";
    $email="";
    $telefone="";

  if(isset($_GET["email"]))
  {
    $email=$_GET["email"];
    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email='$email'");
    $resultado = $comando->execute();
    while($linha=$comando->fetch() )
    {
      $nome=$linha["nome"];
      $email=$linha["email"];
      $telefone=$linha["telefone"];

    
    }
  }
?></div>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="lista.css">
    <link rel="shortcut icon" href="imagens/icone2.png" type="image/x-icon">
    <style>
        body{
            background-image:url("imagens/lista2.png");
            background-size: 170%;
        }
    
    </style>
</head>
<body>

    <section class="area-login">
        <div class="login">

        
        <form action="crud.php" method="post">
            <input type="text" name="nome" placeholder="NOME" autofocus> 
            <input type="text" name="email" placeholder="E-MAIL" autofocus>
            <input type="text" name="telefone" placeholder="TELEFONE" autofocus>

             
                <input type="submit" value="CADASTRAR">
                
                <div class="icone2"><img src="imagens/icone2.png" alt="icone" width="30px"></div>
                <button class="botoes" name="excluir" type="submit">Excluir</button>
                <button class="botoes" name="inserir" type="submit">Inserir</button>
                <button class="botoes" name="alterar" type="submit">Alterar</button>
            
        </form>


    </section>
</body>
</html>


        <?php
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        include("conecta.php");
    
        
        if (isset($_POST["inserir"])) {
            if (!empty($email) && !empty($nome) && !empty($telefone)) {
                $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$nome','$email','$telefone')");
                $resultado = $comando->execute();
                header("Location: index.html");
            } else {
                // Redirecionar para página de cadastro com mensagem de erro
                header("Location: index.html?erro=1");
            }
        }
        
        if (isset($_POST["excluir"])) {
            $comando = $pdo->prepare("DELETE FROM cadastro WHERE email='$email'");
            $resultado = $comando->execute();
            header("Location: index.html");
        }
        
        if (isset($_POST["alterar"])) {
            $comando = $pdo->prepare("UPDATE cadastro SET nome='$nome',email='$email',telefone='$telefone' WHERE email='$email'");
            $resultado = $comando->execute();
            header("Location: index.html");
        }
        
        if (isset($_POST["listar"])) {
            header("Location: adm.php?email=$email");
        }
        
        if (isset($_POST["inserir2"])) {
            if (!empty($email) && !empty($senha) && !empty($senha2) && !empty($cep) && !empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($data_aniversario)) {
                $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$senha2','$cep','$cpf','$nome','$sobrenome','$data_aniversario')");
                $resultado = $comando->execute();
                header("Location: p.principal.php");
            } else {
                // Redirecionar para página de cadastro com mensagem de erro
                header("Location: pagina_registro_por_email.html");
            }
        }
        ?>
        
?>
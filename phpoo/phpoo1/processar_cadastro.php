
<?php
    include 'conexao.php';
    include 'usuario.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmarsenha = $_POST["confirmarsenha"];
        
        if ($senha === $confirmarsenha)
        {
            $usuario = new Usuario($conn);

            if ($usuario->cadastrar($nome, $email, $senha))
            {
                header("Location: cadastrar_usuario_sucesso.php");
                exit();
            }
            else
            {
                echo "erro! tente novamente!";
            }
        }
        else
        {
            header("Location: cadastrar_usuario.php?erro=1");
        }
            
    }
?>

<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/login_index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body/>
<div class="login">
    <form method="post" role="form" class="login-form col-sm-5">

        <h1>login</h1>

        <div class="form-group">
            <label for="">usuario</label>
            <input type="text" class="form-control" name="usuario" id="">
        </div>

        <div class="form-group">
            <label for="">senha</label>
            <input type="password" class="form-control" name="senha" id="">
        </div>

        <div class="form-group">
            <label for="">chave</label>
            <input type="password" class="form-control" name="chave" id="">
        </div>

        <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
        <input type="hidden" name="enviar" value="login">

        <?php

        @$usuario = addslashes($_POST["usuario"]);
        @$senha = addslashes($_POST["senha"]);
        @$chave = addslashes($_POST["chave"]);

        if (isset($_POST['enviar']) && $_POST['enviar'] == "login") {
            if ($_POST["usuario"] && $_POST["senha"]) {

                @$usuario = addslashes($_POST["usuario"]);
                @$senha = addslashes($_POST["senha"]);
                @$chave = addslashes($_POST["chave"]);

                $sql = $conecxao->prepare("SELECT * FROM usuarios WHERE nome = ? AND senha = ?");
                $sql->bind_param("ss", $usuario, $senha);
                $sql->execute();
                $get = $sql->get_result();
                $total = $get->num_rows;
                $dados = $get->fetch_assoc();


                if ($total > 0) {
                    $_SESSION['usuarioID'] = $dados['id'];
                    $_SESSION['usuarioUsuario'] = $dados['usuario'];
                    $_SESSION['usuarioNome'] = $dados['nome'];

                    redirecionaParaOutraPagina("index.php","success",2,"Logado com sucesso!");

                } else {
                    echo "<div class='alert alert-danger'>Usuário ou senha inválido.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
            }
        }

        ?>

    </form>
</div>

</body>
</html>


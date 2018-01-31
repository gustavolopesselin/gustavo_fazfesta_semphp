<?php
$conexao = mysql_connect('localhost','root','');
    if(!$conexao){
        die(mysql_error());
    }
$banco = mysql_select_db('tb_teste', $conexao);
    if(!$banco){
        die(mysql_error());
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <label> Nome: </label> <input type="text" name="nome">
    <label> Senha: </label> <input type="text" name="senha">
    <input type="submit" name="Botao" value="Cadastrar">
   
    <?php
        $nome = $_POST['nome'];
        $senha =$_POST['senha'];
        if($nome = "" || $nome = null){
            echo("COLOQUE UM USUARIO");
        }else{
            if($senha = "" || $senha = null){
                echo("COLOQUE UMA SENHA")
            }else{

                $insert = mysql_query('INSERT INTO tb_teste(nome_usuario, senha_usuario) VALUES ('$nome','$senha')');
                    if(!$insert){
                        die('ERRO PARA CADASTRAR'.mysql_error());
                    }
                    else{
                        echo('CADASTRO FEITO');
                    }
            }
        }



       

    ?>

</body>
</html>
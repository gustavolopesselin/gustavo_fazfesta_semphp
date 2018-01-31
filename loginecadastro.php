<?php
    include_once('conexao.php');
    $selectlogincadastro = mysql_query('SELECT * FROM tb_usuario');
        if(!$selectlogincadastro){
            die(mysql_error());
        }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fazfesta.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animacao.js"></script>
    <title>Login e Cadastro</title>
</head>
<body>
    <header>
        <?php include_once('header.php'); ?>
    </header>
    <section class="sectioncadastro">
        <div class="container">
            <form class="form-horizontal">
                    <fieldset>
                    
                    <!-- Form Name -->
                    <legend>Login e Cadastro</legend>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="txt_login">Login</label>  
                      <div class="col-md-6">
                      <input id="txt_login" name="txt_login" type="text" placeholder="Digite seu Login" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="txt_senha">Senha</label>
                      <div class="col-md-6">
                        <input id="txt_senha" name="txt_senha" type="password" placeholder="Digite sua Senha" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="btn_entrar"></label>
                      <div class="col-md-4">
                        <button id="btn_entrar" name="btn_entrar" class="btn btn-success sectioncadastrobuttonlogar">Entrar</button>
                      </div>
                    </div>
                    
                    
                    </fieldset>
                    </form>
        
            <div class="form-group">
                    <label class="col-md-4 control-label" for="btn_cadastro"></label>
                    <div class="col-md-4">
                        <a href="cadastrocliente.php"><button id="btn_cadastro" name="btn_cadastro" class="btn btn-warning sectioncadastrobuttoncadastro">Cadastre-se</button></a>
                    
                    </div>
                </div> 
        </div>        
    </section>
    <section class="sectioncadastroinfo">
        <div class="container">
            <p>Essa area é para clientes que queiram saber mais sobre nossos produtros
                e trabalho, tendo um contato com fotos atualizadas semanalmente de eventos 
                realizados pelo Faz Festa Locadora. Tambem temos anuncios de promoçoes
                de produtos especificos toda semana.

            </p>
    </div>
    </section>
    <footer>
        <?php include_once('footer.php'); ?>
        </footer>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
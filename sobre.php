<?php
    require_once('conexao.php');
    $selectsobre = mysql_query('SELECT * FROM tb_sobre');
        if(!$selectsobre){
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
    <title>Sobre Faz Festa</title>
</head>
<body>
    <header>
        <?php include_once('header.php'); ?>
    </header>
    <!--
        while($rowsobre = mysql_fetch_assoc($selectsobre)){
            utf8_encode($rowsobre['descricao_sobre']);
        }
    -->
    <section class="row sectionsobre">
        <div class="container">
            <div class="animated rotateInUpLeft col-md-12 col-sm-12 col-xs-12">
                <h1>Sobre</h1>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p>A FazFesta Locadora é uma das maiores e mais conceituadas empresas de locação de materiais para eventos e festas da região metropolitana de Campinas. Por isso, trabalhamos com o que há de mais bonito e moderno no mercado.
                    Aqui você encontra um grande e diversificado estoque, que permite atender festas de grande, médio e pequeno porte e permite a negociação do menor preço com os clientes.
                    Alugamos bistrôs, cadeiras de ferro, cadeiras tifany, mesas, mesas bistrôs, sofás e puffs para casamentos, festas de 15 anos, bodas, coquetéis, formaturas, confraternizações, entre outros.
                    Veja nossos produtos e entre em contato.</p>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12 sectionalbumsobre">
                
            </div>
        </div>

    </section>

    <footer class="row">
        <?php include_once('footer.php'); ?>
    </footer>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
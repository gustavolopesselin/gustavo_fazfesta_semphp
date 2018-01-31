<?php
    require_once('conexao.php');
    $selectalbum = mysql_query('SELECT * FROM tb_album');
        if(!$selectalbum){
            die(mysql_error());
        }
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Album Faz Festa</title>
</head>
<body>
    <header>
        <?php include_once('header.php'); ?>
    </header>
    <section class="sectionalbum">
        <h1 class="animated rotateInUpLeft container">Álbum</h1>
        <?php $nome = "sectionalbum"?>
        <?php while($row = mysql_fetch_assoc($selectalbum)) { $x++ ?>
        <?php $fotoalbum = $nome . $x ?>
        <div class="container sectionalbumbarra"></div>
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12 <?php echo $fotoalbum ?>">
                </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="sectionalbumtitulop"><?php echo utf8_encode($row['tipo_album'])?></p>
                <p class="sectionalbumtestop"><?php echo utf8_encode($row['descricao_album']) ?></p>
            </div>
        </div>
        <?php } ?>
        <div class="sectionalespaco"></div>
    </section>
    <footer class="row">
        <?php include_once('footer.php'); ?>
    </footer>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
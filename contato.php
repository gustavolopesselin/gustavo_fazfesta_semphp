<?php
    require_once('conexao.php');
    $selectcontato = mysql_query('SELECT * FROM tb_contato');
        if(!$selectcontato){
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
    <script>
            function initMap() {
            var uluru = {lat: -22.9340641, lng: -47.0671007};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 18,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7JBdljC0bCdl5FGEAyc0f_7F-3J5sgf0&callback=initMap"></script>
    <title>Contato Faz Festa</title>
</head>
<body>
    <header>
        <?php include_once('header.php'); ?>
    </header>
    <section class="row sectioncontato">
        <div class="animated rotateInUpLeft container">
            <h1>Contato</h1>
            <div class="container" id="map"></div>
            <h2>Av. Ralfo Leite de Barros, 235 - Jardim do Trevo, Campinas - SP, 13040-020</h2>
        </div>
    </section>
    <section class="row sectioncontatoinfo">
        <div class="container">
            <?php $nomefoto = "img/fotocontato"?>
            <?php $tipo = ".png"?>
            <?php $x = 0 ?>
            <?php while($row = mysql_fetch_assoc($selectcontato)) { $x++?>
            <?php $fotocontato = $nomefoto . $x . $tipo ?>
            <div class="col-md-4 col-sm-12 col-xs-12 pbarraindex">
                <h1 class="col-md-12 col-sm-12 col-xs-12"><?php echo utf8_encode($row['tipo_contato']) ?></h1>
                <img src="<?php echo $fotocontato ?>" alt="">
                <p><?php echo utf8_encode($row['descricao_contato']) ?></p>
            </div>
            <?php } ?>
        </div>
    </section>
    <footer class="row">
    <?php include_once('footer.php'); ?>
    </footer>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
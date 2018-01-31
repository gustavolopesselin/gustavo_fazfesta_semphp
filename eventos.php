<?php
    require_once('conexao.php');
    $selecteventos = mysql_query('SELECT tb_evento.data_evento, tb_evento.local_evento, tb_evento.hora_evento, tb_usuario.nome_usuario, tb_cadeira.descricao_cadeira, tb_mesa.descricao_mesa, tb_sofa.descricao_sofa FROM `tb_evento`
    INNER JOIN tb_usuario ON tb_usuario.id_usuario = tb_evento.id_usuario
    INNER JOIN tb_cadeira ON tb_cadeira.id_cadeira = tb_evento.id_cadeira
    INNER JOIN tb_mesa ON tb_mesa.id_mesa = tb_evento.id_mesa
    INNER JOIN tb_sofa ON tb_sofa.id_sofa = tb_evento.id_sofa');
        if(!$selecteventos){
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
    <title>Eventos</title>
</head>
<body>
    <header class="headermenucliente">
        <?php include_once('headercadastro.php'); ?>
    </header>
    <section class="sectioneventos">
        <div class="container">
            <h1>Eventos</h1>
        </div>
        <div>
            <p>Esse espaço é para que você possa conferir todos os eventos que o faz festa esta cobrindo durante o ano</p>
        </div>
        <div>
            <table class="tabelaevento">
                <tr>
                    <th>Local</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Dono</th>
                    <th>ID Cadeira</th>
                    <th>ID Mesa</th>
                    <th>ID Sofá</th>
                </tr>
                <?php while($row = mysql_fetch_assoc($selecteventos)){ ?>
                <tr>
                    <td><?php echo utf8_encode($row['local_evento'])?> </td>
                    <td><?php echo utf8_encode($row['data_evento'])?> </td>
                    <td><?php echo utf8_encode($row['hora_evento'])?> </td>
                    <td><?php echo utf8_encode($row['nome_usuario'])?> </td>
                    <td><?php echo utf8_encode($row['descricao_cadeira'])?> </td>
                    <td><?php echo utf8_encode($row['descricao_mesa'])?> </td>
                    <td><?php echo utf8_encode($row['descricao_sofa'])?> </td>
                </tr>
                <?php } ?>
               
            </table>
        </div>
    </section>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
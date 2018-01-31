<?php 
    include_once('conexao.php');
    $selectcadeira = mysql_query('SELECT * FROM tb_cadeira');
        if(!$selectcadeira){
            die(mysql_error());
        }
    $selectmesa = mysql_query('SELECT * FROM tb_mesa');
        if(!$selectmesa){
            die(mysql_error());
        }
    $selectsofa = mysql_query('SELECT * FROM tb_sofa');
        if(!$selectsofa){
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
    <title>Produtos</title>
</head>
<body>
    <header class="headermenucliente">
        <?php include_once('headercadastro.php'); ?>
    </header>
    <section class="sectionprodutoslogin">
        <div class="container">
            <h1>Produtos</h1>
        </div>
        <div>
            <p>Esse espaço é para que você possa conferir todos os produtos que o Faz Festa possui e ver suas caracteristicas</p>
        </div>
        <div>
            <table class="tabelaprodutos">
                <tr>
                    <th colspan="5">Cadeira</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Cor</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preco UND</th>
                </tr>
                <?php while($row = mysql_fetch_assoc($selectcadeira)) {?>
                <tr>
                    <td><?php echo utf8_encode($row['id_cadeira'])?></td>
                    <td><?php echo utf8_encode($row['cor_cadeira'])?></td>
                    <td><?php echo utf8_encode($row['descricao_cadeira'])?></td>
                    <td><?php echo utf8_encode($row['quantidade_cadeira'])?></td>
                    <td><?php echo utf8_encode($row['precound_cadeira'])?></td> 
                </tr>
                <?php } ?>
                <tr>
                    <th colspan="5">Mesa</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Cor</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preco UND</th>
                </tr>
                <?php while($row = mysql_fetch_assoc($selectmesa)) {?>
                <tr>
                    <td><?php echo utf8_encode($row['id_mesa'])?></td>
                    <td><?php echo utf8_encode($row['cor_mesa'])?></td>
                    <td><?php echo utf8_encode($row['descricao_mesa'])?></td>
                    <td><?php echo utf8_encode($row['quantidade_mesa'])?></td>
                    <td><?php echo utf8_encode($row['precound_mesa'])?></td> 
                </tr>
                <?php } ?>
                <tr>
                    <th colspan="5">Sofá</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Cor</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preco UND</th>
                </tr>
                <?php while($row = mysql_fetch_assoc($selectsofa)) {?>
                <tr>
                    <td><?php echo utf8_encode($row['id_sofa'])?></td>
                    <td><?php echo utf8_encode($row['cor_sofa'])?></td>
                    <td><?php echo utf8_encode($row['descricao_sofa'])?></td>
                    <td><?php echo utf8_encode($row['quantidade_sofa'])?></td>
                    <td><?php echo utf8_encode($row['precound_sofa'])?></td> 
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
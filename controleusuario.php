<?php
    require_once('conexao.php');
    $selectcontroleusuario = mysql_query('SELECT tb_usuario.`id_usuario`, tb_usuario.`nome_usuario`, tb_usuario.`email_usuario`, tb_usuario.`cidade_usuario`, tb_usuario.`celular_usuario`, tb_usuario.`estado_usuario`, tb_usuario.`senha_usuario`, tb_tipousuario.tipo_tipousuario FROM `tb_usuario`
	INNER JOIN tb_tipousuario ON tb_tipousuario.id_tipousuario = tb_usuario.id_tipousuario ');
        if(!$selectcontroleusuario){
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
    <title>Controle Usuario</title>
</head>
<body>
    <header class="headermenucliente">
      <?php include_once('headercadastro.php'); ?>
    </header>
    <section class="sectioncontroleusuario">
        <div class="container">
            <h1>Controle Usuario</h1>
        </div>
        <div>
            <p>Esse espaço é somente para usuarios ADMINISTRATIVO onde os mesmos terao acesso a toda informação de cadastro dos clientes</p>
        </div>
        <div>
            <table class="tabelacontroleusuario">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-Mail</th>
                    <th>Cidade</th>
                    <th>Celular</th>
                    <th>Estado</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                </tr>
                <?php while($row = mysql_fetch_assoc($selectcontroleusuario)) {?>
                <tr>
                    <td><?php echo utf8_encode($row['id_usuario'])?></td>
                    <td><?php echo utf8_encode($row['nome_usuario'])?></td>
                    <td><?php echo utf8_encode($row['email_usuario'])?></td>
                    <td><?php echo utf8_encode($row['cidade_usuario'])?></td>
                    <td><?php echo utf8_encode($row['celular_usuario'])?></td>
                    <td><?php echo utf8_encode($row['estado_usuario'])?></td>
                    <td><?php echo utf8_encode($row['senha_usuario'])?></td>
                    <td><?php echo utf8_encode($row['tipo_tipousuario'])?></td>
                </tr>
                <?php } ?>
                
            </table>
        </div>
    </section>
</body>
</html>
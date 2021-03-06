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
    <title>Dados Sobre a Conta</title>
</head>
<body>
    <section class="sectiondadoscontacliente">
      <div class="container sectioncadastroclientetesto">
        <img class="img_responsive" src="img/logotipo_fazfesta_cadastro.png" alt="">
          <h1 >Dados Sobre Sua Conta</h1>
        </div>
        <div class="container">
            <form class="form-horizontal">
                <fieldset>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-6 control-label" for="txt_nomedadosconta">Nome Completo</label>  
                  <div class="col-md-6">
                  <input id="txt_nomedadosconta" name="txt_nomedadosconta" type="text" placeholder="Digite seu Nome Completo" class="form-control input-md" required="" maxlength="50">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="txt_emaildadosconta">E-Mail</label>  
                  <div class="col-md-6">
                  <input id="txt_emaildadosconta" name="txt_emaildadosconta" type="email" placeholder="Digite seu E-Mail" class="form-control input-md" required="" maxlength="50">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="txt_cidadedadosconta">Cidade</label>  
                  <div class="col-md-6">
                  <input id="txt_cidadedadosconta" name="txt_cidadedadosconta" type="text" placeholder="Digite sua Cidade" class="form-control input-md" required="" maxlength="20">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="txt_estadodadosconta">Estado</label>  
                  <div class="col-md-6">
                  <input id="txt_estadodadosconta" name="txt_estadodadosconta" type="text" placeholder="Digite seu Estado" class="form-control input-md" required="" maxlength="2">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="txt_celulardadosconta">Celular</label>  
                  <div class="col-md-6">
                  <input id="txt_celularcadastro" name="txt_celulardadosconta" type="text" placeholder="Digite seu Celular" class="form-control input-md" required="" maxlength="13">
                  <span class="help-block">Exemplo: (xx)xxxx-xxxx</span>  
                  </div>
                </div>
                
                <!-- Multiple Checkboxes -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="id_tipocadastrocliente">Tipo Usuario</label>
                    <div class="col-md-4">
                    <div class="checkbox">
                      <label for="id_tipocadastrocliente-0">
                        <input type="checkbox" name="id_tipocadastrocliente" id="id_tipocadastrocliente-0" value="1">
                        Usuario
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="txt_senhadadosconta">Senha</label>
                  <div class="col-md-6">
                    <input id="txt_senhadadosconta" name="txt_senhadadosconta" type="text" placeholder="Digite sua Senha" class="form-control input-md" required="" maxlength="10">
                    
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="btn_salvardadosconta"></label>
                  <div class="col-md-4">
                    <button id="btn_salvardadosconta" name="btn_salvardadosconta" class="btn btn-success">Salvar</button>
                  </div>
                </div>
                
                </fieldset>
                </form>
                </div>
            <h2><a href="menu.php">Voltar</a> </h2>
            </section>
</body>
</html>
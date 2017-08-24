<?php $path = $_SERVER['DOCUMENT_ROOT'];
 require_once ($path.'/condoplan/controller/php/htmlSelectQuadra.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    
 <head>
 <title>CondoPlan - Iniciar aprovação</title>      
    <?php require($path.'/condoplan/view/php/header.php'); ?><!--arquivos comuns do cabeçalho-->
    <!-- Switchery -->
    <link href="/condoplan/util/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
</head>   
    
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    <?php require($path.'/condoplan/view/php/menu_lateral.php') ?><!--menu lateral-->
    <?php require($path.'/condoplan/view/php/menu_superior.php') ?><!--menu superior-->
   
    
    <!-- page content -->
        <div class="right_col " role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Início</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Análise de Projeto<small>inserir dados</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="analise" method="post" action="/condoplan/controller/php/recebe_aprovacao_projeto.php" enctype="multipart/form-data" class="form-horizontal form-label-left formularioEntrada" style="display:none">
                        <?php if (!empty($_GET['id'])) {
                            echo "<input type='hidden' id='idLoad' value=".$_GET['id'].">";
                        }?>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proprietario">Proprietário <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="corretor" name="proprietario" placeholder="Nome do Proprietário" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quadra">Quadra <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php echo $htmlSelectQuadra?>
                            <!--<input type="text" id="quadra" name="quadra" required="required" class="form-control col-md-7 col-xs-12">-->
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lote">Lote <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="lote" name="lote" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="arquivo">Arquivo DWG <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="arquivo">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button class="btn btn-primary" type="reset">Resetar</button>
                          <button type='button' class='btn btn-success'id="enviar">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
        
        <!-- /page content -->
<?php require($path.'/condoplan/view/php/footer.php') ?><!--rodape-->    
    </div><!--end of main container-->
 </div><!--end of container body-->


<?php require($path.'/condoplan/view/php/footer_script.php') ?><!--scripts do rodapé-->
<!-- Switchery -->
    <script src="/condoplan/util/vendors/switchery/dist/switchery.min.js"></script>
<!-- Jquery mask -->    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>


<!--Controlador-->
    <script src="/condoplan/controller/js/AprovacaoController.js"></script>

   <?php //caso o formulário seja de alteração
        if (empty($_GET['id'])) {
        echo "<script>$('.formularioEntrada').show()</script>";    
    }else{
        echo "<script>propostaController.carregarProposta()</script>";
    }
    
    ?>
                        
</body>
</html>    

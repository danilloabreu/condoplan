<?php $path = $_SERVER['DOCUMENT_ROOT'];
 require_once ($path.'/condoplan/controller/php/htmlSelectQuadra.php');
 require_once ($path.'/condoplan/Model/php/Lote.php')
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    
 <head>
 <title>CondoPlan - Aprovação de Projetos</title>      
    <?php require($path.'/condoplan/view/php/header.php'); ?><!--arquivos comuns do cabeçalho-->
    
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
                <h3>Análise de Projeto</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Análise de Projeto<small></small></h2>
                    <!--<ul class="nav navbar-right panel_toolbox">
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
                    </ul>-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>
                    <div class="alert alert-success text-center"><p><strong>Sucesso!</strong> Seu projeto foi encaminhado para análise com sucesso!</p>
                        <p>Uma cópia das instruções foi encaminhado para o seguinte e-mail xxx</p>
                        <p>Para verificar o andamento de um protocolo, clique aqui<p>
                    </div>
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

<!--Controlador-->
<script src="/condoplan/controller/js/AprovacaoController.js"></script>
                     
</body>
</html>    



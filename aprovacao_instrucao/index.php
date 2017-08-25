<?php $path = $_SERVER['DOCUMENT_ROOT'];
require_once "$path/condoplan/util/model/php/Usuario.php";
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    
 <head>
 <title>Condoplan - Gerenciador de Condominios</title>      
    <?php require($path.'/condoplan/menu/header.php'); ?><!--arquivos comuns do cabeçalho-->
  
</head>   
    
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    <?php require($path.'/condoplan/menu/menu_lateral.php') ?><!--menu lateral-->
    <?php require($path.'/condoplan/menu/menu_superior.php') ?><!--menu superior-->
   
    
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Instruções para a aprovação dos projetos</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!--<div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>-->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jardim Barra do Cisne</h2>
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
            <ol>
            <li><p>Elaborar o projeto de acordo com a úlima revisão do código de obras </p></li>
            <li><p>Faça o pagamento da taxa de Análise</p></li>
            <li><p>Clique em iniciar. Preencha o formulário e faça o upload do projeto</p></li>
            <li><p>Seu projeto será analisado e o parecer estará disponível no sistema</p></li>
            <li><p>Elabore as correções necessárias</p></li>
            <li><p>Assim que aprovado,será disponivilizado o carimbo da Associação</p></li>
            <li><p>Faça o novo upload</p></li>
            </ol>
         
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php require($path.'/condoplan/menu/footer.php') ?><!--rodape-->    
    </div><!--end of main container-->
 </div><!--end of container body-->
<?php require($path.'/condoplan/menu/footer_script.php') ?><!--scripts do rodapé-->


</body>
</html>    

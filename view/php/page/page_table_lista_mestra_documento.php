<?php $path = $_SERVER['DOCUMENT_ROOT'];?>
<!DOCTYPE html>
<html lang="pt-br">
    
 <head>
 <title>Lista Mestra de Documentos</title>      
    <?php require($path.'/condoplan/view/php/header.php'); ?><!--arquivos comuns do cabeçalho-->
        <!-- Datatables -->
    <link href="/condoplan/util/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/condoplan/util/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/condoplan/util/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/condoplan/util/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/condoplan/util/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="/condoplan/view/css/page_table_proposta.css" rel="stylesheet">
</head>   
    
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    <?php require($path.'/condoplan/view/php/menu_lateral.php') ?><!--menu lateral-->
    <?php require($path.'/condoplan/view/php/menu_superior.php') ?><!--menu superior-->
   
    
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Lista Mestra de Documentos</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Procedimentos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="/condoplan/view/php/form/proposta.php">Inserir Proposta</a>
                          </li>
                          <li><a href="#" id="linkAlterar">Alterar Proposta</a>
                          </li>
                          <li><a href="/condoplan/view/php/table/table_proposta.php" rel="modal:open">Abrir modal</a>
                          </li>
                        </ul>
                      </li>
                      <!--<li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>-->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php require($path.'/condoplan/view/php/table/table_lista_mestra_documento.php');?>
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
 <!-- Datatables -->
    <script src="/condoplan/util/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/condoplan/util/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/condoplan/util/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/condoplan/util/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/condoplan/util/vendors/pdfmake/build/vfs_fonts.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.8.2/jquery.modal.css" />x      
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.8.2/jquery.modal.js"></script>
 
    
    <script src="/condoplan/controller/js/pageTableProposta.js"></script>

</body>
</html>    

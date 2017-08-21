<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require ($path.'/condoplan/view/php/header.php');
?>


<!-- Switchery -->
<link href="/condoplan/util/vendors/switchery/dist/switchery.min.css" rel="stylesheet">

 <script ></script>

<!-- page content -->
        <div class="right_col " role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Proposta</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Análise de Proposta<small>inserir dados</small></h2>
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
                    <form id="#demo-form2" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="corretor">Corretor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="corretor" name="corretor" placeholder="Nome do corretor/imobiliária" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comprador">Comprador<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="comprador" name="comprador" required="required" placeholder="Nome completo do comprador" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rendaLiquida">Renda Líquida (R$) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="rendaLiquida" name="rendaLiquida" placeholder="Somente números" required="required" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>                     
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="entrada">Entrada líquida (R$) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="entrada" name="entrada" required="required" placeholder="Somente números" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numParcela">Número de Parcelas <span >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="numParcela" name="numParcela" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valorParcela">Valor das Parcelas <span >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="valorParcela" name="valorParcela" placeholder="Somente números" required="required" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quadra">Quadra <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                
                            <!--<input type="number" id="quadra" name="quadra" required="required" class="form-control col-md-7 col-xs-12">-->
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valorVenda">Valor da Venda <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="valorVenda" name="valorVenda" placeholder="Somente números" required="required" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>
                        
                       
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dados do Contrato</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" id="isEmitido" class="js-switch" /> Contrato Emitido?
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" id="isAssinado" class="js-switch" /> Contrato Assinado?
                            </label>
                          </div>
                         
                        </div>
                      </div>


                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Resetar</button>
                          <button type="button" class="btn btn-success" onclick="analisePropostaController.enviarAnalise()">Enviar</button>
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



<?php
require ($path.'/condoplan/view/php/footer.php');
?>

    <!-- jQuery -->
    <script src="/condoplan/util/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/condoplan/util/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/condoplan/util/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/condoplan/util/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/condoplan/util/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/condoplan/util/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/condoplan/util/vendors/moment/min/moment.min.js"></script>
    <script src="/condoplan/util/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="/condoplan/util/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/condoplan/util/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="/condoplan/util/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="/condoplan/util/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="/condoplan/util/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="/condoplan/util/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="/condoplan/util/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="/condoplan/util/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="/condoplan/util/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="/condoplan/util/vendors/starrr/dist/starrr.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    
    <!--Classe AnaliseParcela-->
    <script src="/condoplan/model/js/AnaliseProposta.js"/></script>
    <!--Controlador-->
    <script src="/condoplan/controller/js/AnalisePropostaController.js"></script>
    
    
    <script src="/condoplan/controller/js/analiseProposta.js"></script>
    
    <script> let analisePropostaController = new AnalisePropostaController()</script>
    
    <!-- Custom Theme Scripts --
    <script src="/condoplan/util/build/js/custom.min.js"></script>-->
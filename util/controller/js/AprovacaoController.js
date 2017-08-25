$(document).ready(function() {
 
    $(document).on('change','#quadra',function(){
        $.post("/condoplan/controller/php/getHtmlSelectLote.php",{
        quadra: $(this).val()        
        },
        function(data, status){
            $("#divSelectLote").html(data);
            });//fim da função data,status 
            
    });//fim da mudança de quadra
   
   $(document).on('click','#enviar',function(){
        $("#formAprovacao").submit();
        /*$.post("/condoplan/controller/php/recebe_aprovacao_projeto.php",{
        quadra: $("#quadra").val(),
        quadra: $("#lote").val(),
        },
        function(data, status){
            $("#divSelectLote").html(data);
            });//fim da função data,status
        
        
    });//fim da função clique
   
   */
   

});	
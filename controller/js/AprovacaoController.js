class AprovacaoController{
    
    constructor (){
        
        let dv = document.querySelector.bind(document);//div view a ser inserido novos html   
        this.inputProprietario =$('#proprietario');
        this.inputQuadra =$('#quadra');
        this.inputLote=$('#lote');
        this.inputEntrada=$('#entrada');
        this.inputNumParcela=$('#numParcela');
        this.inputValorParcela=$('#valorParcela');
        this.inputQuadra = $('#quadra');
        this.inputLote = $('#lote');
        this.inputValor = $('#valorVenda');
        this.inputIsContratoEmitido= $('#isContratoEmitido');
        this.inputIsContratoAssinado= $('#isContratoAssinado');
        this.inputIdLoad= $('#idLoad');
        this.tipo="inserir";
        this.proposta = new Proposta();
        this.proposta.tipo="inserir";
        this.propostaView = new PropostaView();
        
    }
    
    
    
    enviarProposta(){
        
        this.proposta.comprador   = this.inputComprador.val();
        this.proposta.corretor    = this.inputCorretor.val();
        this.proposta.rendaLiquida= this.inputRendaLiquida.cleanVal();
        this.proposta.entradaLiquida = this.inputEntrada.cleanVal();
        this.proposta.numParcela     = this.inputNumParcela.val();
        this.proposta.valorParcela    =this.inputValorParcela.cleanVal();
        this.proposta.quadra  =   this.inputQuadra.val();
        this.proposta.lote = this.inputLote.val();
        this.proposta.valor = this.inputValor.cleanVal();
        this.proposta.isContratoAssinado = this.inputIsContratoAssinado.prop("checked");
        this.proposta.isContratoEmitido = this.inputIsContratoEmitido.prop("checked");
        console.log(this.proposta);
        
        $.ajax({
            url: '/condoplan/controller/php/propostaController.php',
            type: 'post',
            context: this,
            dataType: 'text',
            success: function (data) {
                console.log(data);
                alert("Os dados foram inseridos com sucesso!");
                this.proposta = new Proposta();
                this.propostaView.update(this);
            },
            error: function(xhr){
            console.log("An error occured: " + xhr.status + " " + xhr.statusText);
            alert("Erro. Verifique os logs");
            },
            data: {
                propostaJson : JSON.stringify(this.proposta)
            }
        });
        
    }//fim do enviar análise 
    
    carregarProposta(){
        this.proposta.tipo="alterar";
       $.ajax({
            url: '/condoplan/controller/php/propostaController.php',
            type: 'post',
            context: this,
            dataType: 'text',
            success: function (data) {
                //console.log(data);
                let proposta=JSON.parse(data);
                console.log(proposta);
                //console.log(proposta.comprador);
                this.proposta.comprador=proposta.comprador;
                this.proposta.corretor=proposta.corretor;
                this.proposta.quadra=proposta.quadra;
                this.proposta.lote=proposta.lote;
                this.proposta.rendaLiquida=proposta.rendaLiquida;
                this.proposta.entradaLiquida=proposta.entradaLiquida;
                this.proposta.numParcela=proposta.numParcela;
                this.proposta.valorParcela=proposta.valorParcela;
                this.proposta.valorVenda=proposta.valorVenda;
                this.proposta.isContratoAssinado=proposta.isContratoAssinado;
                this.proposta.isContratoEmitido=proposta.isContratoEmitido;
                console.log(this);
                this.propostaView.update(this);
                $('.formularioEntrada').show();
            },
            error: function(xhr){
            console.log("An error occured: " + xhr.status + " " + xhr.statusText);
            },
            data: {
                idProposta : this.inputIdLoad.val()
            }
        });  
    }

    
    
    
}//fim da classe AnaliseParcelaController


$(document).ready(function() {
                
    $("#enviar").click(function () {
    $('#analise').submit();
})

   

});	
class PropostaView {
    //elemento é o elemento para qual o html será renderizado
    constructor(elemento) {
        
        this.elemento = elemento;
    }
    //template é o html onde o model está inserido
    template(model) {
        
       let html =''; 
       
       return html;
    }
     
      
    update(model) {
        
        model.inputComprador.val(model.proposta.comprador); 
        model.inputCorretor.val(model.proposta.corretor);
        model.inputRendaLiquida.val(model.proposta.rendaLiquida).trigger('input');
        model.inputEntrada.val(model.proposta.entradaLiquida).trigger('input');
        model.inputNumParcela.val(model.proposta.numParcela);
        model.inputValorParcela.val(model.proposta.valorParcela).trigger('input');
        model.inputQuadra.val(model.proposta.quadra);
        model.inputLote.val(model.proposta.lote);
        model.inputValor.val(model.proposta.valorVenda).trigger('input');
        //model.inputIsContratoEmitido.prop("checked",model.proposta.isContratoEmitido);
        //model.inputIsContratoAssinado.prop("checked",model.proposta.isContratoAssinado);
        
        if(model.proposta.isContratoAssinado){
        model.inputIsContratoAssinado.click();
        }
        if(model.proposta.isContratoEmitido){
        model.inputIsContratoEmitido.click();
        } 
         
         

    }//fim do método update
  
}//fim da classe PropostaView




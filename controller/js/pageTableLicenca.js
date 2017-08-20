$(document).ready(function() {
    //tradução tabela para portugues            
    var table = $('#tabelaLicenca').DataTable({
    "language": {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
}//fim da configuração de linguagem
        } );//fim da tabela
$('#tabelaLicenca tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            $('#linkAlterar').attr('href','#');
            
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
             $('#linkAlterar').attr('href','/condoplan/view/php/page/page_form_proposta.php?id='+$(this).attr('idProposta'));
        }
    } );//fim da função onClick
           
                		
	});//fim da função ready	
	

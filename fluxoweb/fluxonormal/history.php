<?php

define("URL_PREFIX","");

//INCLUDE API
include_once("api/definitions.php");


$logged_in = true;

//INCLUDE VIEWS
include_once("views/head.php");
include_once("views/header.php");


?>
    <br>
    <div id="alert-del" class="alert alert-success alert-dismissible fade show noshow" role="alert">
        Carga limpada com sucesso e pode ser vista no histórico.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container card-fixed">
        <div class="card-body">
            <h3 class="card-title title">Minhas Cargas:</h3>
            <div class="col-sm h4">
                <div class="row">
                    <span class="col-sm"><b>Carga</b></span>
                    <span class="col-sm"><b>Status</b></span>
                    <span class="col-sm"><b>Preço</b></span>
                    <span class="col-sm"><b>Motorista</b></span>
                    <span class="col-sm"><b></b></span>
                </div>
                <div class="row" id="carga1">
                    <span class="col-sm">Carga 1</span>
                    <span class="col-sm text-success">Entregue</span>
                    <span class="col-sm">R$ 1250,00</span>
                    <span class="col-sm">Rodrigo</span>
                    <span class="col-sm"><div data-toggle="modal" data-target="#modalcarga" onclick="vercarga(1)"><i class="col-sm-2 fas fa-eye text-info" data-toggle="tooltip" data-placement="right" title="Ver"></i></div></span>
                </div>
                <div class="row" id="carga2">
                    <span class="col-sm">Carga 2</span>
                    <span class="col-sm text-danger">Cancelada</span>
                    <span class="col-sm">R$ 450,00</span>
                    <span class="col-sm">Saulo</span>
                    <span class="col-sm"><div data-toggle="modal" data-target="#modalcarga" onclick="vercarga(2)"><i class="col-sm-2 fas fa-eye text-info" data-toggle="tooltip" data-placement="right" title="Ver"></i></div></span>
                </div>
                <div class="row" id="carga3">
                    <span class="col-sm">Carga 3</span>
                    <span class="col-sm text-success">Entregue</span>
                    <span class="col-sm">R$ 950,00</span>
                    <span class="col-sm">Pedro</span>
                    <span class="col-sm"><div data-toggle="modal" data-target="#modalcarga" onclick="vercarga(3)"><i class="col-sm-2 fas fa-eye text-info" data-toggle="tooltip" data-placement="right" title="Ver"></i></div></span>
                </div>
                <div class="row noshow" id="carga4">
                    <span class="col-sm" id="nome4">Nome</span>
                    <span class="col-sm text-danger">Procurando...</span>
                    <span class="col-sm" id="preco4">Valor</span>
                    <span class="col-sm">Procurando...</span>
                    <span class="col-sm"><i class="col-sm-2 fas fa-eye text-info" data-toggle="tooltip" data-placement="right" title="Cancelar"></i></span>
                </div>
            </div>
            <br>
            <a href="painel.php"><button class="btn btn-dark">Voltar</button></a><br>
        </div>
    </div>
    
    <div id="modalcarga" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalhes da Carga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body h3 text-left">
                <b>Status:</b> <span id="modal-carga-status"></span><br>
                <b>Motorista:</b> <span id="modal-carga-motorista"></span><br>
                <b>Nome:</b> <span id="modal-carga-nome"></span><br>
                <b>Preco:</b> <span id="modal-carga-preco"></span><br>
                <b>Tipo Carga:</b> <span id="modal-carga-tipocarga"></span><br>
                <b>Tipo Carroceria:</b> <span id="modal-carga-tipocarroceria"></span><br>
                <b>Peso:</b> <span id="modal-carga-peso"></span><br>
                <b>Endereço Origem:</b> <span id="modal-carga-endorigem"></span><br>
                <b>CEP Origem:</b> <span id="modal-carga-ceporigem"></span><br>
                <b>Endereço Destino:</b> <span id="modal-carga-enddestino"></span><br>
                <b>CEP Destino:</b> <span id="modal-carga-cepdestino"></span><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button><br><br><br>
            </div>
            </div>
        </div>
    </div>

<?php

include_once("views/voltarfluxo.php");

include_once("views/footer.php");

?>
<script>

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    function vercarga(numcarga) {
        switch(numcarga) {
            case 1: {
                $("#modal-carga-status").html("Entregue");
                $("#modal-carga-status").addClass('text-success');
                $("#modal-carga-motorista").html("Rodrigo");
                $("#modal-carga-nome").html("Carga 1");
                $("#modal-carga-preco").html("R$ 1250,00");
                $("#modal-carga-tipocarga").html("Gado");
                $("#modal-carga-tipocarroceria").html("Boiadeira");
                $("#modal-carga-peso").html("14 tol");
                $("#modal-carga-endorigem").html("Goiânia-GO");
                $("#modal-carga-ceporigem").html("74000-000");
                $("#modal-carga-enddestino").html("São Paulo-SP");
                $("#modal-carga-cepdestino").html("04236-094");
            }break;
            case 2: {
                $("#modal-carga-status").html("Cancelada");
                $("#modal-carga-status").addClass('text-danger');
                $("#modal-carga-motorista").html("Saulo");
                $("#modal-carga-nome").html("Carga 2");
                $("#modal-carga-preco").html("R$ 450,00");
                $("#modal-carga-tipocarga").html("Sorvete");
                $("#modal-carga-tipocarroceria").html("Baú Refrigerado");
                $("#modal-carga-peso").html("200 Kg");
                $("#modal-carga-endorigem").html("São Paulo-SP");
                $("#modal-carga-ceporigem").html("04236-094");
                $("#modal-carga-enddestino").html("Goiânia-GO");
                $("#modal-carga-cepdestino").html("74000-000");
            }break;
            case 3: {
                $("#modal-carga-status").html("Entregue");
                $("#modal-carga-status").addClass('text-success');
                $("#modal-carga-motorista").html("Pedro");
                $("#modal-carga-nome").html("Carga 3");
                $("#modal-carga-preco").html("R$ 950,00");
                $("#modal-carga-tipocarga").html("Carnes");
                $("#modal-carga-tipocarroceria").html("Baú Frigorífico");
                $("#modal-carga-peso").html("500 Kg");
                $("#modal-carga-endorigem").html("Goiânia-GO");
                $("#modal-carga-ceporigem").html("74000-000");
                $("#modal-carga-enddestino").html("São Paulo-SP");
                $("#modal-carga-cepdestino").html("04236-094");
            }break;
            default: break;
        }
    }
</script>
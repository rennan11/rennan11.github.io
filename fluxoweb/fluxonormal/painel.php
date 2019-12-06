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
        Carga limpada com sucesso mas ainda pode ser vista no histórico.
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
                    <span class="col-sm">Carga 3</span>
                    <span class="col-sm text-success">Entregue</span>
                    <span class="col-sm">R$ 950,00</span>
                    <span class="col-sm">Pedro</span>
                    <span class="col-sm"><span data-toggle="modal" data-target="#modalcarga" onclick="vercarga(1)"><i class="col-sm-2 fas fa-eye text-info" data-toggle="tooltip" data-placement="top" title="Ver"></i><span style="margin-right:30px"></span></span><i class="col-sm-2 fas fa-trash-alt text-dark" onclick="apagar(1)" data-toggle="tooltip" data-placement="right" title="Limpar"></i></span>
                </div>
                <div class="row" id="carga2">
                    <span class="col-sm">Carga 4</span>
                    <span class="col-sm text-info">Em Transporte</span>
                    <span class="col-sm">R$ 650,00</span>
                    <span class="col-sm">Paulo</span>
                    <span class="col-sm"><span data-toggle="modal" data-target="#modalcarga" onclick="vercarga(2)"><i class="col-sm-2 fas fa-eye text-info" data-toggle="tooltip" data-placement="right" title="Ver"></i></span></span>
                </div>
                <div class="row" id="carga3">
                    <span class="col-sm">Carga 5</span>
                    <span class="col-sm text-warning" id="status-carga3">A Caminho</span>
                    <span class="col-sm">R$ 1050,00</span>
                    <span class="col-sm">Jorge</span>
                    <span class="col-sm"><span data-toggle="modal" data-target="#modalcancelarcarga3"><i id="cancel3" class="col-sm-2 fas fa-times-circle text-danger" data-toggle="tooltip" data-placement="right" title="Cancelar"></i></span></span>
                </div>
                <div class="row noshow" id="carga4">
                    <span class="col-sm" id="nome4">Nome</span>
                    <span class="col-sm text-warning" id="status-carga4">Procurando...</span>
                    <span class="col-sm" id="preco4">Valor</span>
                    <span class="col-sm" id="motorista-carga4">Procurando...</span>
                    <span class="col-sm"><span data-toggle="modal" data-target="#modalcancelarcarga4"><i id="cancel4" class="col-sm-2 fas fa-times-circle text-danger" data-toggle="tooltip" data-placement="right" title="Cancelar"></i></span></span>
                </div>
            </div>
            <br>
            <button id="cadastrocarga" class="btn btn-info" data-toggle="modal" data-target="#modalcadastro">Cadastrar Carga</button>
            <a href="history.php"><button class="btn btn-dark">Histórico de Cargas</button></a><br>
        </div>
    </div>
    
    <div id="modalcadastro" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de Carga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="carganome" name="carganome" class="form-control" placeholder="Nome da Carga"><br>
                <input type="text" id="preco" name="preco" class="form-control" placeholder="Preço"><br>
                <input type="text" name="tipocarga" class="form-control" placeholder="Tipo de Carga"><br>
                <input type="text" name="tipocarroceria" class="form-control" placeholder="Tipo de Carroceria"><br>
                <input type="text" name="peso" class="form-control" placeholder="Peso"><br>
                <input type="text" name="origem" class="form-control" placeholder="Endereço de origem"><br>
                <input type="text" name="ceporigem" class="form-control" placeholder="CEP de origem"><br>
                <input type="text" name="destino" class="form-control" placeholder="Endereço de destino"><br>
                <input type="text" name="cepdestino" class="form-control" placeholder="CEP de destino"><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="criarcarga()" data-dismiss="modal">Cadastrar Carga</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button><br><br><br>
            </div>
            </div>
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

    <div id="modalcancelarcarga3" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cancelamento de Carga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body h4">
                Você tem certeza que deseja <b class="text-danger">CANCELAR</b> a carga?<br><br>
                <b>OBS:</b> Motorista já está a caminho da Empresa<br><br>
                <i style="font-size:12px">*Possível cobrança de taxa</i>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" onclick="cancelarcarga(3)" data-dismiss="modal">Sim</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Não</button><br><br><br>
            </div>
            </div>
        </div>
    </div>
    <div id="modalcancelarcarga4" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cancelamento de Carga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body h4">
                Você tem certeza que deseja <b class="text-danger">CANCELAR</b> a carga?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" onclick="cancelarcarga(4)" data-dismiss="modal">Sim</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Não</button><br><br><br>
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

    $('#modalcadastro').on('shown.bs.modal', function () {
        $('#cadastrocarga').trigger('focus')
    })

    function apagar(carga){
        switch(carga) {
            case 1: {
                $("#carga1").hide();
                $("#alert-del").show();
                console.log("Carga 1 apagada");
                break;
            }
            case 2: {
                $("#carga2").hide();
                console.log("Carga 2 apagada");
                break;
            }
            case 3: {
                $("#carga3").hide();
                console.log("Carga 3 apagada");
                break;
            }
            default: console.log("error: numero de carga inválido");
        }
    }
    
    function cancelarcarga(carga) {
        switch(carga) {
            case 1: break;
            case 2: break;
            case 3: {
                $("#status-carga3").html("Cancelada");
                $("#status-carga3").removeClass('text-warning');
                $("#status-carga3").addClass('text-danger');
                $("#cancel3").hide();
            } break;
            case 4: {
                $("#status-carga4").html("Cancelada");
                $("#status-carga4").removeClass('text-warning');
                $("#status-carga4").addClass('text-danger');
                $("#motorista-carga4").html("Cancelada");
                $("#cancel4").hide();
            } break;
            default: break;
        }
    }

    function criarcarga() {
        carganome = $("#carganome").val();
        preco = $("#preco").val();

        if(carganome == "") carganome = "Carga 6";
        if(preco == "") preco = "R$ 700,00";
        else preco = "R$ " + preco;

        $('#nome4').html(carganome);
        $('#preco4').html(preco);
        //$('#carga4').show();
        $('#carga4').css("display","flex");
    }

    function vercarga(carga) {
        switch(carga) {
            case 1: {
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
            case 2: {
                $("#modal-carga-status").html("Em Transporte");
                $("#modal-carga-status").addClass('text-info');
                $("#modal-carga-motorista").html("Paulo");
                $("#modal-carga-nome").html("Carga 4");
                $("#modal-carga-preco").html("R$ 650,00");
                $("#modal-carga-tipocarga").html("Sorvete");
                $("#modal-carga-tipocarroceria").html("Baú Refrigerado");
                $("#modal-carga-peso").html("200 Kg");
                $("#modal-carga-endorigem").html("São Paulo-SP");
                $("#modal-carga-ceporigem").html("04236-094");
                $("#modal-carga-enddestino").html("Goiânia-GO");
                $("#modal-carga-cepdestino").html("74000-000");
            }break;
            default: break;
        }
    }
</script>
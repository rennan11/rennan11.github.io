<?php

define("URL_PREFIX","");

//INCLUDE API
include_once("api/definitions.php");

//INCLUDE VIEWS
include_once("views/head.php");
include_once("views/header.php");


?>
    <br>
    <div class="container col-sm-5 card-fixed">
        <div class="card-body">
            <h3 class="card-title title">Administrador, faça login abaixo:</h3>
            <form class="card-text form-group" method="get" action="cargas.php">
                <input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário"><br>
                <input type="password" class="form-control" name="senha" placeholder="Senha"><br>
                <input type="submit" class="btn btn-dark col-sm-4" value="Entrar">
            </form>
        </div>
    </div>

<?php

include_once("views/voltarfluxo.php");

include_once("views/footer.php");
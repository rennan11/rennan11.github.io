<?php

define("URL_PREFIX","");

//INCLUDE API
include_once("api/definitions.php");

//INCLUDE VIEWS
include_once("views/head.php");
include_once("views/header.php");

?>

<br>
<div class="container">
    <div class="row">
        <div class="title col-sm text-light">
            <h1>Carger</h1>
            <br>Contate motoristas autonomos para fazer suas entregas pelo Carger.
            <br>Cadastre sua empresa agora e já começe a usar a plataforma para fazer suas entregas.
            <!--<br><br>Está com alguma dúvida? Conheça nós melhor abaixo:
            <br><br><div class="btn btn-secondary">Sobre Nós</div>--><br><br>
            <br><br>Você um motorista autonômo e quer trabalhar conosco? Baixe o app agora mesmo abaixo
            <br><br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <img src="images/googleplay.svg" height="60px">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <img src="images/applestore.svg" height="60px">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <br><br>
            <div class="container card-fixed">
                <div class="card-body">
                    <h3 class="card-title title">Cadastre sua empresa aqui</h3>
                    <form class="card-text form-group" method="get" action="cadastro.php">
                        <input type="text" class="form-control" name="nome" placeholder="Nome da Empresa"><br>
                        <input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário"><br>
                        <input type="email" class="form-control" name="email" placeholder="Email"><br>
                        <input type="password" class="form-control" name="senha" placeholder="Senha"><br>
                        <input type="submit" class="btn btn-dark col-sm-6" value="Cadastre-se"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once("views/voltarfluxo.php");

//INCLUDE FOOTER
include_once("views/footer.php");
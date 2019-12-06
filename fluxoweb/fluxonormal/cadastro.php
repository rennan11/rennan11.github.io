<?php

define("URL_PREFIX","");

//INCLUDE API
include_once("api/definitions.php");

//INCLUDE VIEWS
include_once("views/head.php");
include_once("views/header.php");

if(isset($_GET['nome'])) {
?>
    <br>
    <div class="container card-fixed">
        <div class="card-body">
            <h3 class="card-title title">Olá, <?php if(isset($_GET['nome']) && !empty($_GET['nome'])) echo $_GET['nome']; else echo "Empresa" ?>. Termine seu cadastro abaixo:</h3>
            <form class="card-text form-group" method="get" action="painel.php">
                <input type="text" class="form-control" name="nome" value="<?php echo $_GET['nome'] ?>"><br>
                <input type="text" class="form-control" name="usuario" value="<?php echo $_GET['usuario'] ?>"><br>
                <input type="email" class="form-control" name="email" value="<?php echo $_GET['email'] ?>"><br>
                <input type="password" class="form-control" name="senha" value="<?php echo $_GET['senha'] ?>"><br>
                <input type="text" class="form-control" name="cnpj" placeholder="CNPJ"><br>
                <input type="text" class="form-control" name="endereco" placeholder="Endereço"><br>
                <input type="text" class="form-control" name="cep" placeholder="CEP"><br>
                <input type="text" class="form-control" name="telefone" placeholder="Telefone"><br>
                <input type="checkbox" class="" required> Li e aceito os <a href="termos.php">Termos de Condição</a>.<br><br>
                <input type="submit" class="btn btn-success col-sm-4" value="Finalizar Cadastro">
                <input type="cancel" class="btn btn-danger col-sm-4" value="Cancelar"><br>
            </form>
        </div>
    </div>
<?php 
} else {
?>
    
    <br>

    <div class="container card-fixed">
        <div class="card-body">
            <h3 class="card-title title">Cadastro Inicial não preenchido</h3>
            <a href="index.php"><button class="btn btn-danger col-sm-4">Voltar a Página Inicial</button></a>
        </div>
    </div>
<?php
}

include_once("views/voltarfluxo.php");

include_once("views/footer.php");
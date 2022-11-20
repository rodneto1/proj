<?php
include "./Projeto.php";

if (isset($_GET['enviar'])) {

    $insert = new Projeto($_GET['orcamento'], $_GET['clientes'], $_GET['trafos'], $_GET['mt'], $_GET['bt'], $_GET['postes'], $_GET['descricao']);

    echo $insert->insert();
}

include "./src/template/head.php";
?>

<div class="p-4">
    <form action="">
        <div class="row my-2">
            <div class="col">
                <label for="orçamento">Orçamento</label>
                <input type="number" name="orcamento" id="orcamento" step=".01" class="form-control">
            </div>

            <div class="col">
                <label for="clientes">Clientes</label>
                <input type="number" name="clientes" id="clientes" class="form-control">
            </div>

            <div class="col">
                <label for="trafos">Trafos</label>
                <input type="number" name="trafos" id="trafos" class="form-control">
            </div>
        </div>

        <div class="row my-2">
            <div class="col">
                <label for="mt">Rede de MT</label>
                <input type="number" name="mt" id="mt" step=".001" class="form-control">
            </div>

            <div class="col">
                <label for="bt">Rede de BT</label>
                <input type="number" name="bt" id="bt" step=".001" class="form-control">
            </div>

            <div class="col">
                <label for="postes">Postes</label>
                <input type="number" name="postes" id="postes" class="form-control">
            </div>
        </div>

        <div class="row my-2">
            <div class="col">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="50" row my-2s="5" class="form-control"></textarea>
            </div>
        </div>

        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php include "./src/template/footer.php"; ?>
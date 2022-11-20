<?php
include "./conn.php";
include "./Projeto.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query_exibicao = "SELECT * FROM `projeto` WHERE id = $id";
    $resultado_exibicao = $conn->query($query_exibicao);
}


if (isset($_GET['editar'])) {
    $id = $_GET['id'];

    $edit = new Projeto($_GET['orcamento'], $_GET['clientes'], $_GET['trafos'], $_GET['mt'], $_GET['bt'], $_GET['postes'], $_GET['descricao']);
    $edit->edit($id);
}

include "./src/template/head.php";
?>

<div class="p-4">
    <h1 class="text-light">Editar projeto</h1>

    <?php
    if (isset($_GET['msg'])) {
        echo "<div class='alert alert-success'>Projeto cadastrado com sucesso.</div>";
    }

    while ($projeto = $resultado_exibicao->fetch_assoc()) {
        $id = $projeto['id']; ?>

        <form action="">
            <div class="row my-2">
                <div class="col">
                    <label for="orçamento">Orçamento</label>
                    <input type="number" name="orcamento" id="orcamento" step=".01" class="form-control" value="<?= $projeto['orcamento'] ?>">
                </div>

                <div class="col">
                    <label for="clientes">Clientes</label>
                    <input type="number" name="clientes" id="clientes" class="form-control" value="<?= $projeto['clientes'] ?>">
                </div>

                <div class="col">
                    <label for="trafos">Trafos</label>
                    <input type="number" name="trafos" id="trafos" class="form-control" value="<?= $projeto['trafos'] ?>">
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <label for="mt">Rede de MT</label>
                    <input type="number" name="mt" id="mt" step=".001" class="form-control" value="<?= $projeto['mt'] ?>">
                </div>

                <div class="col">
                    <label for="bt">Rede de BT</label>
                    <input type="number" name="bt" id="bt" step=".001" class="form-control" value="<?= $projeto['bt'] ?>">
                </div>

                <div class="col">
                    <label for="postes">Postes</label>
                    <input type="number" name="postes" id="postes" class="form-control" value="<?= $projeto['postes'] ?>">
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" cols="50" row my-2s="5" class="form-control"><?= $projeto['descricao'] ?></textarea>
                </div>
            </div>

            <input type="hidden" name="id" value="<?= $projeto['id'] ?>">
            <button type="submit" name="editar" class="btn btn-primary">Editar</button>
        </form>

    <?php } ?>
</div>

<?php include "./src/template/footer.php"; ?>
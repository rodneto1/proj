<?php
include "./conn.php";
include "./Projeto.php";
include "./src/template/head.php";

$query_exibicao = "SELECT * FROM `projeto` ORDER BY id desc LIMIT 9";
$resultado_exibicao = $conn->query($query_exibicao);

if (isset($_GET['excluir'])) {
    $delete = new Projeto();
    $delete->delete($_GET['id']);
}
?>

<div class="p-4">
    <?php

    if (isset($_GET['act'])) {

        switch ($_GET['act']) {
            case 'cadastrado':
                echo "<div class='alert alert-success'>Projeto cadastrado com sucesso.</div>";
                break;
            case 'editado':
                echo "<div class='alert alert-success'>Projeto editado com sucesso.</div>";
                break;
            case 'excluido':
                echo "<div class='alert alert-success'>Projeto excluido com sucesso.</div>";
                break;
            default:
                break;
        }
    }
    ?>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Orçamento</th>
                <th>Clientes</th>
                <th>Trafos</th>
                <th>MT</th>
                <th>BT</th>
                <th>Postes</th>
                <th>Descrição</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php while ($projeto = $resultado_exibicao->fetch_assoc()) {
                $id = $projeto['id']; ?>
                <tr>
                    <td><?= $projeto['id'] ?></td>
                    <td><?= $projeto['orcamento'] ?></td>
                    <td><?= $projeto['clientes'] ?></td>
                    <td><?= $projeto['trafos'] ?></td>
                    <td><?= $projeto['mt'] ?></td>
                    <td><?= $projeto['bt'] ?></td>
                    <td><?= $projeto['postes'] ?></td>
                    <td title="<?= $projeto['descricao'] ?>">
                        <?= mb_strimwidth($projeto['descricao'], 0, 10, '...') ?>
                    </td>
                    <td>
                        <a href="./editar.php?id=<?= $id ?>">
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                        </a>
                        <a href="?excluir&id=<?= $id ?>">
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>


<?php include "./src/template/footer.php"; ?>
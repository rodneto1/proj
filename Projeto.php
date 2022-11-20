<?php

class Projeto
{
    public $orcamento;
    public $clientes;
    public $trafos;
    public $mt;
    public $bt;
    public $postes;
    public $descricao;

    public function __construct($orcamento = null, $clientes = null, $trafos = null, $mt = null, $bt = null, $postes = null, $descricao = null)
    {
        $this->orcamento = $orcamento;
        $this->clientes = $clientes;
        $this->trafos = $trafos;
        $this->mt = $mt;
        $this->bt = $bt;
        $this->postes = $postes;
        $this->descricao = $descricao;
    }

    public function insert()
    {
        require "./conn.php";
        $query = "INSERT INTO `projeto`(`orcamento`, `clientes`, `trafos`, `mt`, `bt`, `postes`, `descricao`) VALUES ('$this->orcamento', '$this->clientes', '$this->trafos', '$this->mt', '$this->bt', '$this->postes', '$this->descricao')";

        $result = $conn->query($query);
        header("Location: ./index.php?act=cadastrado");
    }

    public function edit($id)
    {
        require "./conn.php";
        $query = "UPDATE `projeto` SET `orcamento`='$this->orcamento',`clientes`='$this->clientes',`trafos`='$this->trafos',`mt`='$this->mt',`bt`='$this->bt',`postes`='$this->postes',`descricao`='$this->descricao' WHERE id = $id";
        $result = $conn->query($query);
        header("Location: ./index.php?act=editado");
    }

    public function delete($id)
    {
        require "./conn.php";
        $query = "DELETE FROM `projeto` WHERE id = $id";
        $result = $conn->query($query);
        header("Location: ./index.php?act=excluido");
    }
}

<?php

    switch ($_POST["acao"]) {
        case "cadastrar":
                $nome = $_POST["nome"];
                $capacidade_max = $_POST["capacidade_max"];
                $descricao = $_POST["descricao"];

                $sql = "INSERT INTO dim_salas (nome, capacidade_max, descricao) VALUES ('$nome', '$capacidade_max', '$descricao')";

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Sala cadastrada com sucesso!');</script>";
                    print "<script>location.href='?page=salas';</script>";
                } else {
                    print "<script>alert('Não foi possível cadastrar uma nova sala.');</script>";
                    print "<script>location.href='?page=salas';</script>"; 
                }


            break;

        case "editar":
            // code
            break;

        case "excluir":
            // code
            break;
    }
?>

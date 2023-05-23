<?php

    switch ($_POST["acao"]) {
        case "cadastrar":
                $nome = $_POST["nome"];
                $data_hota_ini = $_POST["data_hota_ini"];
                $data_hora_fim = $_POST["data_hora_fim"];
                $data_hora_fim = $_POST["data_criacao"];

                $sql = "INSERT INTO dim_eventos (nome, data_hota_ini, data_hora_fim, data_criacao) VALUES ('$nome', '$data_hota_ini', '$data_hora_fim', '$data_criacao')";

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Eventos cadastrado com sucesso!');</script>";
                    print "<script>location.href='?page=eventos';</script>";
                } else {
                    print "<script>alert('Não foi possível cadastrar um novo evento.');</script>";
                    print "<script>location.href='?page=eventos';</script>"; 
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

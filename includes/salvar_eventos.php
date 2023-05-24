<?php

    switch ($_REQUEST["acao"]) {
        case "cadastrar":
                $nome = $_POST["nome"];
                $data_hora_ini = $_POST["data_hora_ini"];
                $data_hora_fim = $_POST["data_hora_fim"];
                $data_criacao = $_POST["data_criacao"];

                $sql = "INSERT INTO fatos_eventos (nome, data_hora_ini, data_hora_fim, data_criacao) VALUES ('$nome', '$data_hora_ini', '$data_hora_fim', '$data_criacao')";

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Evento cadastrado com sucesso!');</script>";
                    print "<script>location.href='?page=eventos';</script>";
                } else {
                    print "<script>alert('Não foi possível cadastrar um novo evento.');</script>";
                    print "<script>location.href='?page=eventos';</script>"; 
                }


            break;

        case "editar":
            $nome = $_POST["nome"];
            $data_hora_ini = $_POST["data_hora_ini"];
            $data_hora_fim = $_POST["data_hora_fim"];
            $data_criacao = $_POST["data_criacao"];

            $sql = "UPDATE fatos_eventos SET nome = '{$nome}', data_hora_ini = '{$data_hora_ini}', data_hora_fim = '{$data_hora_fim}', data_criacao = '{$data_criacao}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true) {
                print "<script>alert('Evento Editado com sucesso!');</script>";
                print "<script>location.href='?page=eventos';</script>";
            } else {
                print "<script>alert('Não foi possível editar.');</script>";
                print "<script>location.href='?page=eventos';</script>"; 
            }
    
            break;

            break;

        case "excluir":
            $sql = "DELETE FROM fatos_eventos WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Evento excluido!');</script>";
                    print "<script>location.href='?page=eventos';</script>";
                } else {
                    print "<script>alert('Não foi possível excluir.');</script>";
                    print "<script>location.href='?page=eventos';</script>"; 
                }
        
                break;
    }
?>

<?php

    switch ($_REQUEST["acao"]) {
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
            $nome = $_POST["nome"];
            $capacidade_max = $_POST["capacidade_max"];
            $descricao = $_POST["descricao"];

            $sql = "UPDATE dim_salas SET nome = '{$nome}', capacidade_max = '{$capacidade_max}', descricao = '{$descricao}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true) {
                print "<script>alert('Sala Editada com sucesso!');</script>";
                print "<script>location.href='?page=salas';</script>";
            } else {
                print "<script>alert('Não foi possível editar uma nova sala.');</script>";
                print "<script>location.href='?page=salas';</script>"; 
            }
            
            break;

        case "excluir":
            $sql = "DELETE FROM dim_salas WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Sala excluida!');</script>";
                    print "<script>location.href='?page=salas';</script>";
                } else {
                    print "<script>alert('Não foi possível excluir sala.');</script>";
                    print "<script>location.href='?page=salas';</script>"; 
                }
        
                break;
    }
?>

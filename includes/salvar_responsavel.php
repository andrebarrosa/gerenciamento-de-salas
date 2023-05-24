<?php

    switch ($_REQUEST["acao"]) {
        case "cadastrar":
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $ddd = $_POST["ddd"];
                $telefone = $_POST["telefone"];
                $data_criacao = $_POST["data_criacao"];
                $data_edicao = $_POST["data_edicao"];
                $foto = $_POST["foto"];
                $usuario = $_POST["usuario"];
                $senha = $_POST["senha"];


                $sql = "INSERT INTO dim_responsavel (nome, email, ddd, telefone, data_criacao, data_edicao, foto, usuario, senha) 
                VALUES ('$nome', '$email', '$ddd', '$telefone', '$data_criacao', '$data_edicao', '$foto', '$usuario', '$senha')";

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Responsavel cadastrado(a) com sucesso!');</script>";
                    print "<script>location.href='?page=responsavel';</script>";
                } else {
                    print "<script>alert('Não foi possível cadastrar.');</script>";
                    print "<script>location.href='?page=responsavel';</script>"; 
                }


            break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $ddd = $_POST["ddd"];
            $telefone = $_POST["telefone"];
            $data_criacao = $_POST["data_criacao"];
            $foto = $_POST["foto"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            $sql = "UPDATE dim_responsavel SET nome = '{$nome}', email = '{$email}', ddd = '{$ddd}', telefone = '{$telefone}', data_criacao = '{$data_criacao}', foto = '{$foto}', usuario = '{$usuario}', senha = '{$senha}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true) {
                print "<script>alert('Responsavel Editado!');</script>";
                print "<script>location.href='?page=responsavel';</script>";
            } else {
                print "<script>alert('Não foi possível editar.');</script>";
                print "<script>location.href='?page=responsavel';</script>"; 
            }
            break;

        case "excluir":
            $sql = "DELETE FROM dim_responsavel WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Responsavel excluido!');</script>";
                    print "<script>location.href='?page=responsavel';</script>";
                } else {
                    print "<script>alert('Não foi possível excluir.');</script>";
                    print "<script>location.href='?page=responsavel';</script>"; 
                }
            break;
    }
?>

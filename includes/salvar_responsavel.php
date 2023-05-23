<?php

    switch ($_POST["acao"]) {
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
                    print "<script>alert('Responsavel cadastrada com sucesso!');</script>";
                    print "<script>location.href='?page=responsavel';</script>";
                } else {
                    print "<script>alert('Não foi possível cadastrar novo responsavel.');</script>";
                    print "<script>location.href='?page=responsavel';</script>"; 
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

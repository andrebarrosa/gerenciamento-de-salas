<?php
    session_start();

    if(empty($_POST) or empty($_POST["usuario"]) or empty($_POST["senha"])) {
        print "<script>location.href='index.php'</script>";
    }

    include('includes/config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM dim_responsavel WHERE usuario = '$usuario' AND senha = '$senha'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $row->senha;
      
        print "<script>location.href='dashboard.php';</script>";
    } else {
        print "<script>alert('Usuario e/ou senha incorreto(s)');</script>";
        print "<script>location.href='index.php';</script>";
    }
?>
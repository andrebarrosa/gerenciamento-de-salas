<?php
include("config.php");
switch (@$_REQUEST["page"]) {
    case "salas":
        include("salas.php");
        break;

    case "salvar_salas":
        include("salvar_salas.php");
        break;

    case "editar_salas":
            include("editar_salas.php");
        break;
  
    case "eventos":
        include("eventos.php");
        break;
    case "responsavel":
        include("responsavel.php");
        break;
    case "usuarios":
        include("usuarios.php");
        break;
    default:
        print include("inicial.php");
        break;
}
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

    case "salvar_eventos":
        include("salvar_eventos.php");
        break;

    case "editar_eventos":
        include("editar_eventos.php");
        break;

    case "responsavel":
        include("responsavel.php");
        break;

    case "salvar_responsavel":
        include("salvar_responsavel.php");
        break;

    case "editar_responsavel":
        include("editar_responsavel.php");
        break;

        
    case "usuarios":
        include("usuarios.php");
        break;

    default:
        print include("inicial.php");
        break;
}
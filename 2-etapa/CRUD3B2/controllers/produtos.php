<?php
    header("Content-Type: text/html; charset=utf-8");
    $action = !isset($_GET["action"]) || $_GET["action"] == "" ? "list" : $GET["action"];

    switch($action){
        case "list": 
            require_once("../models/produto.php");
            $lista_produtos = Produto::find_all();
            require_once("../views/produtos_list_view.php");
        break;

        case "create":
        break;
    }

?>
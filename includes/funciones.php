<?php
    require 'app.php';

    function incluirTemplate( String $nombre, Bool $inicio = false){
        include TEMPLATES_URL . "/${nombre}.php";
    }
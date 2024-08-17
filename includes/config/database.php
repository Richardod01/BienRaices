<?php
    function conectarDB() : mysqli{
        $db = mysqli_connect('localhost','root','2280','bienesraices_crud');

        if (!$db) {
            echo "Error, no se pudo conectar";
            exit();
        }

        return $db;
    }
<?php
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "crud_teste";

    $conexao = mysqli_connect($server, $user, $password, $database);

    function mensagem($text, $type){
        echo "<div class='alert alert-$type' role='alert'>
            $text
        </div>";
    }

    
    

?>
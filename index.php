<?php

    // Define o caminho do sistema/framework    
    $system = "core";

    // Define a aplicação padrão
    $application = "app/framework";

    //Define os caminhos
    define( "BASE_PATH", __DIR__ );
    define( "DIRECTORY", basename( dirname( $_SERVER['PHP_SELF'] ) ) );

    // Inclue todo o framework
    require_once("core/system/config.php");

?>
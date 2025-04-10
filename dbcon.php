<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operations");

$connection = mysqli_connection(HOSTNAME,USERNAME,PASSWORD,DATABASE);

IF(!$connection){
    die("Connection Faild");
}

else{
    echo "yess";
}

?>
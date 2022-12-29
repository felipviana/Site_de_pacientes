<?php
function conexao(){
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "banco_de_dados";
    $PORT = 3306;
    $conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME, $PORT);
    return $conn;
}
?>
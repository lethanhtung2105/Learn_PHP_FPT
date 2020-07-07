<?php
error_reporting(E_ERROR);
function handle_error($err_no,$err_str,$err_file,$err_line){
    echo "<B>Error:</B> [$err_no] $err_str - $err_file:$err_line";
    echo "</BR>";
    echo "Terminating PHP Script";
    die();
}
set_error_handler("handle_error",E_ERROR);
my_funcion();
?>
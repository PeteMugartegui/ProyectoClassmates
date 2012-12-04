<?php
session_destroy();
setcookie("usuario",$valor1,time()-3600);
?>
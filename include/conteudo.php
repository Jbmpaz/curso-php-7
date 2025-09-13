<?php
    // include ($_GET['dir'] . "/" . $_GET['file'] . ".php");
    include ("{$_GET['dir']}/{$_GET['file']}.php");
    // include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
?>
<?php
ob_start();
?>
<h1>Bienvenue sur H2PROG</h1>
<?php
$content = ob_get_clean();
require_once("templat.php");
?>
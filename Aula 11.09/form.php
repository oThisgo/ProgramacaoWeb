<?php

echo "Foi digitado ".$_GET['nome']." e retornou ".ucfirst($_GET['nome']).".<br>";
echo "Foi digitado ".$_GET['cidade']." e retornou ".ucwords($_GET['cidade']).".<br>";
echo "Foi digitado ".$_GET['profissao']." e retornou ".mb_strtoupper($_GET['profissao']).".<br>";
echo "Foi digitado ".$_GET['user']." e retornou ".mb_strtolower($_GET['user']).".<br>";

?>
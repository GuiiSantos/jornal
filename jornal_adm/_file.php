<head>
    <base href="AAA">
</head>
<?php

//página principal

echo "<a href=\"file.php?\">GG</a><br><br>";
echo "<a href=\"file.php?a=index.php\">GG2</a><br><br>";
echo "<a href=\"file.php?a=publicar.php\">GG3</a><br><br>";

@$pagina = $_GET['a'];

if (isset($pagina)) {
    include $pagina;
}else {
    echo "bem vindo a página principal";
}

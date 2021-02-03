<head>
    <base href="AAA">
</head>
<?php

//página principal

echo ">GG</a><br><br>";
echo ">GG2</a><br><br>";
echo ">GG3</a><br><br>";

@$pagina = $_GET['a'];

if (isset($pagina)) {
    include $pagina;
}else {
    echo "bem vindo a página principal";
}

<?php

$iniciar = curl_init();

curl_setopt($iniciar, CURLOPT_URL, "http://localhost/clientes_db.php");

$nome = $_post['tbl_nome'];

curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, 1)

curl_setopt($iniciar, CURLOPT_HEADER, 0)

curl_setopt($iniciar, CURLOPT_POST, 1);

curl_setopt($iniciar, CURLOPT_POSTFIELDS, $nome);

curl_exec($iniciar);

curl_close($iniciar);

echo '$nome['tbl_nome']';

?>
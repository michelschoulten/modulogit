<?php

$dsn = "mysql:dbname=teste;host=localhost;
$dbuser = "root";
$dbpass = "";

try {
$pdo = new PDO($dsn, $dbuser, $dbpass);

echo "Conexão estabelecida com sucesso!";
}
catch(PDOException $e) {
echo "Falhou: ".$e->getMessage();

?>
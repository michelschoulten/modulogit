<?php

$autor = $_POST["autor"]; //  ' or 1=1

$sql = "SELECT * FROM posts WHERE autor = ' ' or 1=1 ' ";  // Pega tudo do banco e não só um select

?>

<?php

$autor = $_POST["autor"]; // '; DROP TABLE posts;

$sql = "SELECT * FROM posts WHERE autor = ' ' ; DROP TABLE posts ' ";  //Transforma em 2 querys e derruba tabela posts do banco


?>



<?php

$nome = "Fulano";
$nome2 = md5($nome);

echo "Nome Original: ".$nome. "<br/>;
echo "Nome Cripto.: "$nome2;

?>

<?php

$nome = "Fulano";
$nome2 = base64_encode($nome);

echo "Nome Original: ".$nome. "<br/>;
echo "Nome Cripto.: "$nome2;

?>
base64_decode = Descriptografar 
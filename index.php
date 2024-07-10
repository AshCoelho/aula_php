
<?php
 // comentário

 echo "Hello world";

 echo "<br>";
 echo "<b> olá mundo <b>";

 echo "<br>";
 $nome = 'Fulano';

 define("PI", 3.14);

 echo "<br>";

 echo PI;
 echo $nome;

 echo "<br>";

echo "meu nome é: ". $nome . "<br>";
echo "meu nome é: $nome\n";

echo strlen($nome);

echo "<pre>";
var_dump($nome);
echo "<pre>";

echo rand(0, 1000);
echo "<br>";

$frutas = array('maça', 'banana', 'manga');

foreach($frutas as $elemento){
    echo $elemento . "<br>";
}

$idades = array("pedro" =>18, "magno"=>40);
echo $idades['magno'];

foreach($idades as $nome=>$idade){
    echo "$nome tem $idade anos <br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    
</body>
</html>
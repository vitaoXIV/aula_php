<?php  //<?//
$idade = 40;  //sempre terminar com ;//
$nome = "Gustavo";

echo  "$nome tem $idade anos de idade";
echo "<br>helo world <b>";
echo "<br> <b>ola mundo<b> <br>";//quebra de linha
echo "<br> hello <br>";
echo "meu nome é :" . $nome . " minha idade é " . $idade; //concatenação é .//



echo strlen($nome);
$nome_int = (int)$nome; //serve para transfomar, tem varias outras//

echo "<pre>";
var_dump($nome); //especifica o que ela é//
echo "<pre>";

 echo rand(0 , 10); //comando que pega um numero aleatorio//
 echo "<br>";

 //arrays//
 $frutas = array('maça', 'banana', 'manga');

 foreach($frutas as $elemento) { //as significa como
    echo "$elemento <br>";
 }

 $nomes = array('vitor', 'andre', 'suellen', 'luis');
echo "<br>";


 foreach($nomes as $elementos) {
    echo "$elementos <br>";
 }
 echo "<br>";
 
 $idades = array("andre" => 18, "vitor" => 17);
 echo $idades['vitor'];

 foreach($idades as $nomes=>$idades) { //fazendo isso faz as duas frases//
    echo "<br>";
    echo "$nomes tem $idades anos"; //vitor tem 17anos, andre tem 18 anos
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

</body>
</html>

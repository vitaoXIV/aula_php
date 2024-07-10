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
echo "</pre>";

 echo rand(0 , 10); //comando que pega um numero aleatorio//
 echo "<br>";

 //arrays//
 $frutas = array('maça', 'banana', 'manga');

 foreach($frutas as $elemento) { //"as" significa como(uma setinha-->)
    echo "$elemento <br>";
 }

 $nomes = array('vitor', 'andre', 'suellen', 'luis'); //"$' + = + array();
echo "<br>";
echo $frutas[0];

 foreach($nomes as $elementos) {  //foreach é o melhor para leitura de arrays//
    echo "$elementos <br>";
 }
 echo "<br>";
 
 $idades = array("andre" => 18, "vitor" => 17);
 echo $idades['vitor']; //só funciona com aspas simples//


 foreach($idades as $nomes=>$idades) { //fazendo isso faz as duas frases//
    echo "<br>";
    echo "$nomes tem $idades anos"; //vitor tem 17anos, andre tem 18 anos
 }




















?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula php</title>
</head>
<body>
    <h1>OLA MUNDO</h1>

</body>
</html>

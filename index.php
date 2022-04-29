<!DOCTYPE html>
<html>
<body>
<style>
h2{
  font-size: 20px;
  
}
</style>
<?php
// -----------------------------CONCATENAÇÃO----------------------
$nome = "Matheus";
$idade = 24;

// echo $nome." tem ".$idade." anos ";
// echo "$nome tem $idade anos!"



// <!-- na linguaguem php não existe declaração de variavel, se voce declarar um numero inteiro o php entende como inteiro, se voce declarar booleano o php entende como boleano -->

// <!-- posso forçar que a variavel seja inteiro usando (int) (integer)
// para real posso utilizar (real) (float), (double)
// caractere posso utilizar (string)
// logico não tem pois sao considerados numeros inteiros -->



// <!-- -----------------------OPERADORES EM PHP------------ -->

$n1 = 5;
$n2 = 4;
$s = $n1 + $n2;
// echo "A soma entre $n1 e $n2 é igual a $s";


$n1 = 10;
$n2 = 2;
$m = ($n1 + $n2) / 2;
// echo "A soma vale " .($n1+$n2);
// echo "<br/>A subtração vale " .($n1-$n2);
// echo "<br/>A multiplicação vale " .($n1*$n2);
// echo "<br/>A divisão vale " .($n1/$n2);
// echo "<br/>O modulo vale " .($n1%$n2);
// echo "<br/>A média vale $m ";


// ordem de precedencia : 
// 1º lugar os parentese
// 2º lugar: multiplicação/divisão/ moduli
// 3º lugar: adição e subtração
// --------------funções matematicas------------


// abs() pegar valor absoluto de uma variavel

// $v1 = $_GET["x"];
// $v2 = $_GET["y"];
// echo "<h2>Valores recebidos: $v1 e $v2</h2>";
// echo "o valor absoluto de $v2 é " .abs($v2);
// o absoluto de -3 é igual a 3

// -------------------pow cria potenciação----------

// echo "<br/>o valor de $v1<sup>$v2</sup> é " .pow($v1, $v2);

// --------------- raiz (sqrt) ------------------

// echo "<br/> A raiz de $v1 é " .sqrt($v1);

// ------------------------- (round) arredondamento---------------

// echo "<br/> O valor de $v2 arredondado é " .round($v2); ceil ( arredonda pra cima) floor( arredonda pra baixo)

// ---------------------- valor inteiro (intval)----------------
// echo "<br/> A parte inteira de $v2 é " .intval($v2);


// -------------number_format ( formatar numero para monetario)-----------------

// echo "<br/>O valor de $v1 em moeda é R$ " .number_format ($v1, 2);

// --------------OPERADORES DE ATRIBUIÇÃO-----------

// $preco = $_GET["p"];
// echo "O preço do produto é R$" .number_format ($preco, 2);

// $preco += $preco*10/100;
// echo"<br/> O novo preço com 10% de aumento sera de R$" .number_format ($preco, 2);

// $preco -= $preco*10/100;
// echo"<br/> O novo preço com 10% de desconto sera de R$".number_format ($preco, 2);


// ------------------pre incremento---------------
// $atual = $_GET["aa"];
// echo "o ano atual é $atual e o ano anterior é " .--$atual ;


// ------------- uso de variaveis referenciadas---------------

// $a = 3;
// $b = $a;
// $b += 5;
// echo " A variável A vale $a";
// echo "<br/> A vavriavel B vale $b";


// quando coloco o & na frente de A ele cria uma referencia de B a variavel A
// $a = 3;
// $b = &$a;
// $b += 5;
// echo " A variável A vale $a";
// echo "<br/> A variável B vale $b";



// -----------variaveis de variaveis-----------

// $site = "cursoemvideo";
// $$site = "cursophp";
// primeiro se cria uma variavel que vai receber uma string que é cursoemvideo 
// depois no segundo exemplo cria o que chamamos de variavel de variavel onde o primeiro cifrao cria uma variavel que vai receber a variavel site. Sendo assim, a variavel site recebe curso em video portanto, uma variavel cursoemvideo sera criada onde vai receber o cursophp



// $x = "abc";
// $$x = "def";
// echo "O conteúdo da variável X é $x"; 
// echo "<br/> A variável abc criada recebeu o valor $abc"; 


// -----------------------operadores relacionais-----------------------


// maior >
// menor <
// maior ou igual >=
// menor ou igual <=
// diferente <> !=
// igual ==
// identico === 
// operador unario ?: expressão ? verdade:falso


// $n1 = $_GET["a"];
// $n2 = $_GET["b"];
// $tipo = $_GET["op"];
// echo "os valores passados foram $n1 e $n2";
// $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
// echo " <br/>O resultado sera $r";


// $a = 3;
// $b = "3";
// $r = $a === $b ? "sim" : "não";
// echo "<br/>as variáveis a e b são iguais? $r"


// ----------------situação------------------

// $nota1 = $_GET["n1"];
// $nota2 = $_GET["n2"];
// $m = ($nota1+$nota2)/2;
// echo "A média entre $nota1 e $nota2 é $m";
// $sit = ($m < 6) ? "reprovado": "aprovado";
// echo " <br/> A situação do aluno é $sit";

// ----------------operadores lógicos---------------

// $ano = $_GET["an"];
// $idade = 2022 - $ano; 
// echo "quem nasceu em $ano tem idade de $idade anos";
// $vot = ($idade<65 && $idade>=18)? "obrigatorio": "não obrigatório";
// echo " E dessa forma seu voto é <br/> $vot";











































































?>
</body>
</html>
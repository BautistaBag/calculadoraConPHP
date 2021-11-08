
<?
include("claseCalculadora.php");
require_once"calcular.php";
$calculadora = new calculadora();
$valor1=$_POST['primerValor'];
$valor2=$_POST['segundoValor'];
$opcion=$_POST['opcion'];
echo $calculadora->calcularDato($valor1,$valor2,$opcion); 

?>

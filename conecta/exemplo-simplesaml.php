<?php
define("UID",           'urn:oid:0.9.2342.19200300.100.1.1');
define("CN",            'urn:oid:2.5.4.3');
define("SN",            'urn:oid:2.5.4.4');
define("MAIL",          'urn:oid:0.9.2342.19200300.100.1.3');
define("UFRGSVINCULO",  'urn:oid:1.3.6.1.4.1.12619.200.1.1.15');

require_once('/export/var/www/zpanel/simplesamlphp/lib/_autoload.php');

//define que deve ser utilizada a autenticacao shibboleth
$as = new SimpleSAML_Auth_Simple('conecta-GJsw1t3fnksB9hb014uv011AqPGtdT3d');

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//obriga que a pagina abaixo somente seja executada por um usuário autenticado
//$as->requireAuth();
$as->requireAuth( array(
      'ReturnTo' => $actual_link,
    ));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2>Exemplo de Aplicação PHP+SimpleSAML</h2>

<?php
//real utilizaçao dos valores obtidos na autenticação:
//Cria um array de atributos
$attributes = $as->getAttributes();

//imprime os atributos
print(htmlspecialchars( "uid: " . $attributes[UID][0]) . "<br>");
print(htmlspecialchars( "cn: " . $attributes[CN][0]) . "<br>");
print(htmlspecialchars( "sn: " . $attributes[SN][0]) . "<br>");
print(htmlspecialchars( "mail: " . $attributes[MAIL][0]) . "<br>");
for ($i=0; $i<count($attributes[UFRGSVINCULO]); $i++)
  print(htmlspecialchars( "ufrgsVinculo ". $i .": " . $attributes[UFRGSVINCULO][$i]) . "<br>");


$exploted_vinculo =  explode(":", $attributes[UFRGSVINCULO][5]);
foreach($exploted_vinculo as $arr_item){
  echo $arr_item."<br>";
}
?>

<br>
</body>
</html>

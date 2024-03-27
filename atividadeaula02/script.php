<?php
$cliente = $_POST['cliente'];
$nomeproduto1 = $_POST['nomeproduto1'];
$valorproduto1 = $_POST['valorproduto1'];
$nomeproduto2 = $_POST['nomeproduto2'];
$valorproduto2 = $_POST['valorproduto2'];
$valorpago = $_POST['valorpago'];
$valortotal = $valorproduto1 + $valorproduto2;
$valortroco = $valorpago - $valortotal;
 

echo "<center>
<table border='1cm'>
<tr><td>Cliente</td><td>$cliente</td></tr><tr><td>Produto</td><td>$nomeproduto1</td></tr><tr><td>Valor </td><td>$valorproduto1</td></tr><tr>
<td> Nome</td><td>$nomeproduto2</td></tr><tr><td>Valor</td><td>$valorproduto2</td></tr><tr><td>Total</td><td>$valortotal</td></tr><tr><td> 
Valor Pago</td><td>$valorpago</td</tr><tr><td>Troco</td><td>$valortroco</td></tr>
</table>
</center>
";


?>
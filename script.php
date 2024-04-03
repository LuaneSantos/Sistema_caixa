<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
$nome_cliente = $_POST['nome_cliente'];
$primeiro_produto = $_POST['primeiro_produto'];
$valor_primeiro_produto = $_POST['valor_primeiro_produto'];
$segundo_produto = $_POST['segundo_produto'];
$valor_segundo_produto = $_POST['valor_segundo_produto'];
$valor_pago = $_POST['valor_pago'];
 
$total_gasto = $valor_primeiro_produto + $valor_segundo_produto;
 
$troco = $valor_pago - $total_gasto;
 
echo "<h2>Nota Fiscal 🧾</h2>";
echo "<p><strong>Nome do Cliente:</strong> $nome_cliente</p>";
echo "<p><strong>Quanto Gastou:</strong> R$ $total_gasto</p>";
echo "<p><strong>Troco:</strong> R$ $troco</p>";
?>
</div>
</body>
</html>


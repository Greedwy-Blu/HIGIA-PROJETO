<?php


require_once("../backend/db/connection.class.php");


$servico = "%".trim($_GET['servico']."%");
$pdo = new Connection();

$st = $pdo->prepare('SELECT * FROM profissional WHERE servico LIKE :servico');

$st->bindParam(':servico', $servico ,PDO::PARAM_STR);
$st->execute();  


$resultados = $st->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HÍGIA</title>


    <style> *{ font-family: "Baloo Tamma 2" !important;}
  
  
  
  </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body class="bg-white">
    

<header>

</header>

<br>



<main>

<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>
<label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['servico']; ?></label>
<br>
<?php
} } else {
?>
<label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script sc="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</body>
</html>
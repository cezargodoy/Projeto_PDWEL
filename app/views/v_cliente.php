<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
</head>
<body>

<h1> Cliente </h1>
<p>Cliente</p>
<?php 
    foreach($clientes as $cliente){
        echo $cliente["cliente"] ."<br>";
    }

?>
</body>
</html>





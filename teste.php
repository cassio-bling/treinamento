<html>

<?php

require("server.php"); 

?>

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <p id="titulo">Teste pagina</p>

    <?php 
    $dados = teste();

    foreach($dados as $dado) {
        echo $dado['modelo'] . "<br>";
    }
    
    ?>
</body>

</html>
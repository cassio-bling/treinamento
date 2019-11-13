<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>Relação de veículos</h3>
        </div>
        <div class="row">
            <p>
                <a href="create.php" class="btn btn-success">Create</a>
            </p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'veiculo-query.php';
                                        
                    foreach (listarVeiculos() as $row) {
                        echo '<tr>';
                        echo '<td>' . $row['descricao'] . '</td>';
                        echo '<td>' . $row['placa'] . '</td>';
                        echo '<td>' . $row['marca'] . '</td>';
                        echo '<td><a class="btn" href="read.php?id='.$row['id'].'">Editar</a></td>';
                        echo '</tr>';
                    }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
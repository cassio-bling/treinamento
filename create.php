<?php

require 'database.php';

if (!empty($_POST)) {
    // keep track validation errors
    $descricaoError = null;
    $placaError = null;
    $marcaError = null;

    // keep track post values
    $descricao = $_POST['descricao'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];

    // validate input
    $valid = true;
    if (empty($descricao)) {
        $descricaoError = 'Informe a descrição';
        $valid = false;
    }

    if (empty($placa)) {
        $placaError = 'Informe a placa';
        $valid = false;
    }
    // } else if ( !filter_var($placa, FILTER_VALIDATE_placa) ) {
    //     $placaError = 'Please enter a valid placa Address';
    //     $valid = false;
    // }

    if (empty($marca)) {
        $marcaError = 'Informe a marca';
        $valid = false;
    }

    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO veiculo (descricao, placa, marca) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($descricao, $placa, $marca));
        Database::disconnect();
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="styles.css?id=12345"> -->
</head>

<body>

    <form>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
    </form>

    <div class="container">




        <div>
            <div class="row">
                <h3>Cadastro do veículo</h3>
            </div>

            <div class="label-group">
                <label>Padding Topqweq</label>
                <label>Padding Topqweq</label>
            </div>

            <div class="input-group">
                <label class="control-label">Padding Topqweq</label>
                <input type="text" class="form-control" placeholder="Start" />

                <!-- <label class="control-label">Padding Top</label>     -->
                <input type="text" class="form-control" placeholder="End" />
                <input type="text" class="form-control" placeholder="End" />
                <input type="text" class="form-control" placeholder="End" />
            </div>

            <form>
                <div class="form-group col-xs-4 col-md-4">
                    <label for="name" class="control-label">Padding Top</label>
                    <input type="email" value='' class="form-control" id="name" placeholder="Ime">
                </div>
                <div class="form-group col-xs-4 col-md-4">
                    <label for="name" class="control-label">Padding Bottom</label>
                    <input type="email" value='' class="form-control" id="name" placeholder="Ime">
                </div>
            </form>

            <form class="form-horizontal" action="create.php" method="POST">

                <div class="control-group <?php echo !empty($descricaoErro) ? 'erro' : ''; ?>">
                    <label class="control-label">Descrição</label>
                    <div class="controls">
                        <input descricao="descricao" type="text" placeholder="Descrição" value="<?php echo !empty($descricao) ? '' : ''; ?>">
                        <?php if (!empty($descricaoErro)) : ?>
                            <span class="help-inline"><?php echo $descricaoErro; ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($placaErro) ? 'erro' : ''; ?>">
                    <label class="control-label">Placa</label>
                    <div class="controls">
                        <input descricao="placa" type="text" placeholder="Placa" value="<?php echo !empty($placa) ? $placa : ''; ?>">
                        <?php if (!empty($placaErro)) : ?>
                            <span class="help-inline"><?php echo $placaErro; ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($marcaErro) ? 'error' : ''; ?>">
                    <label class="control-label">Marca</label>
                    <div class="controls">
                        <input descricao="marca" type="text" placeholder="Marca" value="<?php echo !empty($marca) ? $marca : ''; ?>">
                        <?php if (!empty($marcaErro)) : ?>
                            <span class="help-inline"><?php echo $marcaErro; ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a class="btn" href="index.php">Cancelar</a>
                </div>

            </form>
        </div>

    </div> <!-- /container -->
</body>

</html>
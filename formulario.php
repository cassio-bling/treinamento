<html>

<?php

require("server.php");

?>

<head>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 id="dadosCadastrais">Dados cadastrais</h2>

    <hr>

    <div>
        <label>Descrição
            <input type=text id=descricao style="width: 300px" />
        </label>

        <label>Placa
            <input type=text id=placa style="width: 100px" />
        </label>

        <label>Código RENAVAN
            <input type=text id=codigoRenavan style="width: 200px" />
        </label>
    </div>

    <div>
        <label>Ano modelo
            <select>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
            </select>
        </label>

        <label>Ano fabricação
            <select name>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
            </select>
        </label>

        <label>Cor
            <input type=text name=cor style="width: 100px" />
        </label>

        <label>KM
            <input type=text name=km style="width: 100px" />
        </label>

        <label>Marca
            <select name>
                <option value="Citroen">Citroen</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Renault">Renault</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
            </select>
        </label>
    </div>

    <div>
        <label>Preço
            <input type="number" name=preco pattern="[0-9]+([\.,][0-9]+)?" step="0.01" value="0.00" title="Informe o preço do veículo" style="width: 150px">

        </label>

        <label>Preço FIPE
            <input type="number" name=precoFipe pattern="[0-9]+([\.,][0-9]+)?" step="0.01" value="0.00" title="Informe o preço FIPE do veículo" style="width: 150px">
        </label>
    </div>

    <h2 id="componentesAdicionais">Componentes Adicionais</h2>

    <hr>

    <div>
        <input class="checkbox" type="checkbox" id="arCondicionado" checked>
        <label for="arCondicionado">Ar condicionados</label>

        <input class="checkbox" type="checkbox" id="airBag" checked>
        <label for="airBag">Air Bag</label>

        <input class="checkbox" type="checkbox" id="cdPlayer" checked>
        <label for="cdPlayer">CD Player</label>

        <input class="checkbox" type="checkbox" id="cdPlayer" checked>
        <label for="cdPlayer">CD player</label>

        <input class="checkbox" type="checkbox" id="direcaoHidraulica" checked>
        <label for="direcaoHidraulica">Direção hidráulica</label>

        <input class="checkbox" type="checkbox" id="vidroEletrico" checked>
        <label for="vidroEletrico">Vidro elétrico</label>

        <input class="checkbox" type="checkbox" id="travaEletrica" checked>
        <label for="travaEletrica">Trava elétrica</label>

        <input class="checkbox" type="checkbox" id="cambioAutomatico" checked>
        <label for="cambioAutomatico">Cambio automático</label>

        <input class="checkbox" type="checkbox" id="rodasDeLiga" checked>
        <label for="rodasDeLiga">Rodas de liga</label>

        <input class="checkbox" type="checkbox" id="alarme" checked>
        <label for="alarme">Alarme</label>
    </div>

    <div>
        <input class="submit" type="submit" id=salvar value="Salvar">
        <input class="submit" type="submit" id=cancelar value="Cancelar">
    </div>

    <!-- <?php
            $dados = teste();

            foreach ($dados as $dado) {
                echo $dado['modelo'] . "<br>";
            }

            ?> -->
</body>

</html>
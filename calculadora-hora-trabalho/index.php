<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
    <link href="../bootstrap.css" rel="stylesheet">

    <title>Caesar Cipher</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">LightCode</a>
    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
            data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../colorirFoto.php">Colorir Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../naval-battle/index.html">Batalha Naval</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../caesar-cipher/index.html">Cifra de Cesar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../fibonacci-sequence/index.html">Sequencia de Fibonacci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../calculadora-hora-trabalho/index.php">Calculadora Trabalho</a>
            </li>
        </ul>
    </div>
</nav>

<div class="form-horizontal">
    <fieldset>

        <legend>Calculo para Trabalho</legend>

        <form action="calc.php" method="get">
            <div class="form-group">
                <label class="col-md-4 control-label" for="text">Insira o horário de entrada</label>
                <div class="col-md-4">
                    <input class="form-control input-md" id="horaInicial" name="horaInicial" type="time">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="text">Insira quanto tempo é o seu intervalo</label>
                <div class="col-md-4">
                    <input class="form-control input-md" id="tempoIntervalo" name="tempoIntervalo" type="time">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="text">Insira o Total de Horas por Dia</label>
                <div class="col-md-4">
                    <input class="form-control input-md" id="totalHoras" name="totalHoras" type="time">
                </div>
            </div>

            <input type="submit">
        </form>

        <div class="form-group" style="background-color: white">
            <p style="background-color: white">Results: </p>
            <table id="fibonacci-sequence"></table>
        </div>

    </fieldset>
</div>


<script src="calculadora.js.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
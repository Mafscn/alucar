<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-2">
            <?php include('menu-bar.php'); ?>
        </div>
        <div class="col-10">
            <a href="page-cad-veiculo.php" class="btn btn-grande" role="button">Cadastrar Veículo</a>
            <table class="table table-sm table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">"Marca do carro"</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">"Carro"</th>
                        <td>Ano</td>
                        <td>Placa</td>
                        <td>
                            <a href="page-ficha-veiculo.php">
                                <i class="material-icons" style="color: darkgoldenrod">edit</i>
                            </a>
                        </td>
                        <td>
                            <button>
                                <i class="material-icons" style="color: darkred">delete</i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
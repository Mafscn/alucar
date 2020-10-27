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

    <title>Alucar</title>
</head>

<body style="padding-left: 0;">
    <div class="row">
        <div class="d-none d-lg-block col-lg-3">
            <ul class="nav flex-column" id="nav-tab" role="tablist" aria-orientation="vertical">
                <!-- Logo -->
                <li class="nav-item">
                    <a class="navbar-brand">
                        <div class="row">
                            <img src="images/placeholder-logo.png" style="border-radius: 50%; width: 64px;" alt="logo">
                            <div class="container-alucar">
                                <h1>Alucar</h1>
                            </div>
                        </div>
                    </a>
                </li>
                <div style="margin-top: 20%;"></div> <!-- Espaçamento --->
                <li class="nav-item btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">directions_car</i>
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-selected="true">Veículos</a>
                </li>
                <li class="nav-item btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">person</i>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-selected="false">Clientes</a>
                </li>
                <li class="nav-item btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">monetization_on</i>
                    <a class="nav-link" id="nav-messages-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-selected="false">Aluguel</a>
                </li>
                <div style="margin-top: 55%;"></div> <!-- Espaçamento --->
                <li class="nav-item btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">settings</i>
                    <a class="nav-link" id="nav-settings-tab" data-toggle="tab" href="#nav-settings" role="tab" aria-selected="false">Conta</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-lg-9">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <?php require('veiculos-page.html') ?>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Clientes
                </div>
                <div class="tab-pane fade" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">
                    Alugueis
                </div>
                <div class="tab-pane fade" id="nav-settings" role="tabpanel" aria-labelledby="nav-settings-tab">
                    Conta
                </div>
            </div>
        </div>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
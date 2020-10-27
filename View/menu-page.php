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

    <title>Login</title>
</head>

<body style="padding-left: 0;">
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column" id="nav-tab" role="tablist" aria-orientation="vertical">
                <!-- Logo -->
                <a class="navbar-brand">
                    <div class="row">
                        <div class="col-6">
                            <img src="images/placeholder-logo.png" style="border-radius: 50%; width: 64px;" alt="logo">
                        </div>
                        <div class="col-6">
                            <div class="container-alucar">
                                <h1>Alucar</h1>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">directions_car</i>
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-selected="true">Veículos</a>
                </div>
                <div class="btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">person</i>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-selected="false">Clientes</a>
                </div>
                <div class="btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">monetization_on</i>
                    <a class="nav-link" id="nav-messages-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-selected="false">Aluguel</a>
                </div>
                <div class="btn-container">
                    <div class="btn-menu"></div>
                    <i class="material-icons">settings</i>
                    <a class="nav-link" id="nav-settings-tab" data-toggle="tab" href="#nav-settings" role="tab" aria-selected="false">Conta</a>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                <div class="tab-pane fade" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">...</div>
                <div class="tab-pane fade" id="nav-settings" role="tabpanel" aria-labelledby="nav-settings-tab">...</div>
            </div>
        </div>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
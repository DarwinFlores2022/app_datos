<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2612/2612467.png" type="image/x-png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https:///cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $title; ?></title>
    <style>
    body {
        min-height: 20rem;
        padding-top: 2.5rem;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-red navbar-dark fixed-top">
            <div class="wrapper">

            </div>
            <div class="container-fluid all-show">
                <a class="navbar-brand" href="?view=home">CRUD <i class="fa fa-database"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                        <li class="nav-item active">
                            <a class="nav-link" href="?view=product">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?view=category">Categories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?view=proveedor">Providers</a>
                        </li>



                    </ul>
                    <div class="d-flex flex-column sim">

                        <span>Bienvenido: Admin</span>
                        <small class="text-primary"><a href="?view=usuario&a=cerrarSesion">Cerrar Sessión</a></small>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
<?php
@session_start();
require_once '_controller/indexController.php';
$obj = new indexController;
$r =   $obj->data();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SICLOUD</title>

    <!-- Custom fonts for this template-->
   <link href="https://jfa.herokuapp.com/sicloud/public/layout1/css/fontawasome-ico.css" rel="stylesheet" type="text/css" />
   <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <script src="https://jfa.herokuapp.com/sicloud/public/layout1/js/fontawasome-ico.js"></script>

   <link href="https://jfa.herokuapp.com/sicloud/public/layout1/css/fontawasome-ico.css" rel="stylesheet" type="text/css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <script src="https://jfa.herokuapp.com/sicloud/public/layout1/js/fontawasome-ico.js"></script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/19562886.js"></script>
<!-- End of HubSpot Embed Code -->

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SIDEBAR -->
        <?php include './public/body/sidebar.php'; ?>
        <!-- End of SIDEBAR -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- NAVBAR -->

                <?php include './public/body/navbar.php'; ?>
                <!-- End of NAVBAR -->

                <!-- CONTENIDO PRINCIPAL-->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?='Bienvenido '.$_SESSION['usuario']['nombres'] .' '. $_SESSION['usuario']['apellidos'] .' (Rol '.$r['roles'][$_SESSION['usuario']['rol']].') ' ?></h1>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">5</span><span class="ml-2">Ver integrantes</span>
                        </a>
                        <!-- Dropdown - Integrantes -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                INTEGRANTES SICLOUD
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <img class="img-profile rounded-circle w-100" src="template/img/us/user.jpg">
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">27 de enero, 2019</div>
                                    <span class="font-weight-bold">Javier Reyes</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <img class="img-profile rounded-circle w-100" src="template/img/us/anonymous.png">
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">27 de enero, 2019</div>
                                    <span class="font-weight-bold">Fabian Lopez</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <img class="img-profile rounded-circle w-100" src="template/img/us/al.png">
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">27 de enero, 2019</div>
                                    <span class="font-weight-bold">Angel Duran</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <img class="img-profile rounded-circle w-100" src="template/img/us/ruiz.jpg">
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">27 de enero, 2019</div>
                                    <span class="font-weight-bold">Daniel Ruiz</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <img class="img-profile rounded-circle w-100" src="template/img/us/polar.jpg">
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">27 de enero, 2019</div>
                                    <span class="font-weight-bold">David Rincon</span>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </div>



                    <!-- Content Row -->
                    <div class="row">



                        <div class="col-lg-10 my-3 mx-auto">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://miro.medium.com/max/3840/1*vvIq_zDcvP7DdivUY8k-Dw.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nuestras herramientas</h5>
                                            <p>PHP</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://bahiaxip.com/image/post/main/UrgQUmuePatSiP3K4CtPLCHIlv47Y7H5tt5lcKDU.jpeg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nuestras herramientas</h5>
                                            <p>LARAVEL</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://midu.dev/images/wallpapers/una-taza-de-javascript.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nuestras herramientas</h5>
                                            <p>JavaScript</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://miro.medium.com/max/3840/0*oZLL-N4dGNlBe4Oh.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nuestras herramientas</h5>
                                            <p>REACT & REACT NATIVE</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="template/img/sql.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nuestras herramientas</h5>
                                            <p>MySQL</p>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- FIN CONTENIDO PRINCIPAL -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include './public/body/footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  

</body>

</html>
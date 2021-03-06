<?php
require_once '_controller/calendarioController.php';
$obj = new calendarioController;
$c   = $obj->tipoReunion();
@session_start();

?>

<!DOCTYPE html>
<html lang="es">

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

<body id="page-top">>
   <div id="wrapper">
      <?php include './public/body/sidebar.php'; ?>
      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
            <?php include './public/body/navbar.php'; ?>
            <!-- CONTENIDO PRINCIPAL-->





            <!-- FIN CONTENIDO PRINCIPAL -->
         </div>
         <div class="container my-4">
         </div>
         <?php include './public/body/footer.php'; ?>
      </div>
   </div>
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>
</body>

</html>
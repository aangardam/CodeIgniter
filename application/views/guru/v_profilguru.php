<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMAN 6 Bekasi</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Profil</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url().'index.php'; ?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lainnya
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">contact sekolah</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <h1 class="mt-4">PROFIL GURU</h1>
		<center> <img src="<?php echo base_url()?>img/profil.png" width="100px"> </center>

<table border="0">
  <tr>
   <td align="justify" style="text-indent:230px;">Nama</td>
   <td style="text-indent:40px;">: </td>

  </tr>
  <tr>
   <td align="justify" style="text-indent:230px;">Pendidikan</td>
   <td style="text-indent:40px;">: </td>

   </tr>
  <tr>
   <td align="justify" style="text-indent:230px;">Lama Mengajar</td>
   <td style="text-indent:40px;">: </td>

   </tr>
  <tr>
   <td align="justify" style="text-indent:230px;">Alamat</td>
   <td style="text-indent:40px;">: </td>
  </tr>
 </table>
  <br />
  <br />

  </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url()?>assetsvendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

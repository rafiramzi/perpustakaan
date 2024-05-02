
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="https://st2.depositphotos.com/2498595/7199/v/450/depositphotos_71998101-stock-illustration-book-icon.jpg">
  <link rel="icon" type="image/png" href="https://st2.depositphotos.com/2498595/7199/v/450/depositphotos_71998101-stock-illustration-book-icon.jpg">
  <title>
    Dashboard Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset("/assets/css/nucleo-icons.css") }}" rel="stylesheet" />
  <link href="{{ asset("/assets/css/nucleo-svg.css") }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="https://st2.depositphotos.com/2498595/7199/v/450/depositphotos_71998101-stock-illustration-book-icon.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Dashboard Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

   @include('layout/sidebar-admin')
   
  
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tambah Penulis</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div style="justify-content:center; margin:5%;">
                <form action="/admin/table/tambah-penulis" method="post">
                  @csrf
                  <input type="text" name="nama" placeholder="Nama" style="width:60%; margin-bottom:1%;">
                  <input type="text" name="ket" placeholder="Keterangan" style="width:60%; margin-bottom:1%;">
                  <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" style="width:60%; margin-bottom:1%;">
                  <br>
                  <label for="tgl_lahir">Tanggal lahir</label>
                  <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" style="width:50%; margin-bottom:1%;">
                  <br>
                  <button type="submit" class="shadow-md" style="border-radius: 20px; background-color:rgb(68, 68, 193); border:none; color:white;">Tambah Penulis</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
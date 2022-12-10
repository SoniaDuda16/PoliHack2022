<link href="public/css/home.css" rel="stylesheet">

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand" style="max-width:16vw;">
            <h1><img src="public/img/logo.jpeg" width="100%" height="100%"></h1>
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">

            <a href="/index.php?page=acasa" class="nav-item nav-link active">Acasă</a>
            <a href="/index.php?page=desprenoi" class="nav-item nav-link">Despre Noi</a>
            <a href="/index.php?page=servicii" class="nav-item nav-link">Servicii</a>
        </div>
        <a href="/index.php?page=register" class="btn btn-primary py-2 px-4 ms-3">Programează-te</a>
    </div>
</nav>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
      <div class="modal-header border-0">
        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center">
        <div class="input-group" style="max-width: 600px;">
          <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
          <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Full Screen Search End -->

<!-- Carousel Start -->
<div class="container-fluid p-0">
  <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="public/img/carousel-3.jpg" alt="Image" style="height: 88vh;">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 900px; margin-bottom: auto; margin-top: 10vh">
            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Ai grijă de tine!</h5>
            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Găsește rapid serviciile medicale de care ai nevoie</h1>
            <a href="/index.php?page=login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" style="">Conectează-te</a>
            <a href="/index.php?page=register" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Inregistrează-te</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->

<!-- Footer Start
<div class="container-fluid text-light py-2" style="background: #051225; height: 12vh">
  <div class="container">
    <div class="row g-0">
      <div class="col-md-6 text-center text-md-start">
        <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>
            Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>          
        </p>
      </div>
    </div>
  </div>
</div>
Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>



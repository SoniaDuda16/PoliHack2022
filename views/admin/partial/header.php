<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CliniConnect</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="public/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
     Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand" style="max-width:16vw;">
            <h1><img src="public/img/logo.jpeg" width="100%" height="100%"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!--<div class="navbar-nav ms-auto py-0">
                <a href="/index.php?page=home" class="nav-item nav-link <?php if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']!="specialitati" && $_GET['page']!="programari" && $_GET['page']!="inscrieclinica")){ echo "active";} ?>">Acasă</a>
                <a href="/index.php?page=specialitati" class="nav-item nav-link <?php if(isset($_GET['page']) && $_GET['page']=="specialitati"){ echo "active";} ?>">Specialitati</a>
                <a href="/index.php?page=programari" class="nav-item nav-link <?php if(isset($_GET['page']) && $_GET['page']=="programari"){ echo "active";} ?>">Programari</a>
                <a href="/index.php?page=inscrieclinica" class="nav-item nav-link <?php if(isset($_GET['page']) && $_GET['page']=="inscrieclinica"){ echo "active";} ?>" style="margin-right:10px;">Inscrie o clinică</a>
            </div>-->
            <div class="navbar-nav ms-auto py-0">
                <h4 class="nav-item " style="padding-top:6px; color:red !important;"><b>Administrator <?php echo $_SESSION['fullname']; ?></b></h4>
                <a href="/index.php?page=logout" class="nav-item btn btn-primary py-2 ms-3">Ieși din cont</a>
            </div>
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
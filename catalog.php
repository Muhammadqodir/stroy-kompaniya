<?php
require "admin/db_helper.php";

$db = new DBHelper();
$title = "Все услуги";
$sql = "SELECT * FROM products";
$products = [];
if (isset($_GET["category"])) {
  $servs = $db->getService($_GET["category"]);
  if ($servs != null) {
    $title = $servs["name"];
    $products = $db->getMenuByCategory($_GET["category"]);
  } else {
    $products = $db->getAllMenu();
  }
} else {
  $products = $db->getAllMenu();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>СтройКомпания - <?php echo $title ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
  </div>
  <!-- Spinner End -->


  <!-- Topbar Start -->
  <div class="container-fluid bg-dark px-0">
    <div class="row g-0 d-none d-lg-flex">
      <div class="col-lg-6 ps-5 text-start">
        <div class="h-100 d-inline-flex align-items-center text-white">
          <span>Мы в соц. сетях:</span>
          <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-6 text-end">
        <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
          <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Тел:</span>
          <span class="fs-5 fw-bold"><?php echo $db->getField("phone") ?></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <?php include("nav.php") ?>

  <!-- Video Modal Start -->
  <div class="modal modal-video fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Заказать</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="padding: 24px">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Номер телефона</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Номер телефона">
              <small id="emailHelp" class="form-text text-muted">Оставьте свои контакты и мы свяжемся с вами в ближайшее время</small>
            </div>
            <div style="text-align: center; margin-top: 18px;">
            <button type="submit" class="btn btn-primary">Заказать</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal End -->


  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-3 text-white animated slideInRight"><?php echo $title ?></h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb animated slideInRight mb-0">
          <li class="breadcrumb-item"><a href="/">Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->


  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">

        <?php foreach ($products as $item) : ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item">
              <img class="img-fluid" src="<?php echo $item["pic"] ?>" alt="">
              <div class="bg-light" style="padding: 24px;">
                <h3> <?php echo $item["title"] ?></h3>
                <?php echo $item["description"] ?>
                <h4> <?php echo $item["price"] ?> руб</h4>
              </div>
              <button data-bs-toggle="modal" data-bs-target="#contactModal" style="width: 100%;" class="btn btn-primary">Заказать</button>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!-- Team End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Контакты</h5>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $db->getField("address") ?></p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $db->getField("phone") ?></p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $db->getField("mail") ?></p>
          <div class="d-flex pt-3">
            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Ссылки</h5>
          <?php foreach ($db->getAllServices() as $item) : ?>
            <a class="btn btn-link" href=""><?php echo $item["name"] ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Copyright Start -->
  <div class="container-fluid copyright bg-dark py-4">
    <div class="container text-center">
      <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">MQ</a>, All Right Reserved.
      </p>
      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
      <p class="mb-0">Разработано
        <a class="fw-semi-bold">MQ</a>
      </p>
    </div>
  </div>
  <!-- Copyright End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>
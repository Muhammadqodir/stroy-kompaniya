<?php
require "admin/db_helper.php";

$db = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Строй-Компания - Бытовки и хозблоки</title>
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
                    <a class="btn btn-link text-light" href="https://www.avito.ru/user/ca2c4d8d939260746db2970eba9523d6/profile?src=sharing"><img src="https://free-png.ru/wp-content/uploads/2021/11/free-png.ru-480-340x340.png" width="20"></a>
                    <a class="btn btn-link text-light" href="https://t.me/<?php echo str_replace("@", "", $db->getField("telegram")) ?>"><i class="fa-brands fa-telegram"></i></a>
                    <a class="btn btn-link text-light" href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>"><i class="fa-brands fa-square-whatsapp"></i></a>
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


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo $db->getField("pic1") ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 лет опыта работы</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">ХОЗБЛОКИ и БЫТОВКИ для дачи в МОСКВЕ и МО</h1>
                                    <a href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Заказать </a>
                                    <a href="tel:<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="<?php echo $db->getField("pic2") ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 лет опыта работы</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">ХОЗБЛОКИ и БЫТОВКИ для дачи в МОСКВЕ и МО</h1>
                                    <a href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Заказать </a>
                                    <a href="tel:<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="w-100" src="<?php echo $db->getField("pic3") ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 лет опыта работы</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">ХОЗБЛОКИ и БЫТОВКИ для дачи в МОСКВЕ и МО</h1>
                                    <a href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Заказать </a>
                                    <a href="tel:<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="w-100" src="<?php echo $db->getField("pic4") ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 лет опыта работы</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">ХОЗБЛОКИ и БЫТОВКИ для дачи в МОСКВЕ и МО</h1>
                                    <a href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Заказать </a>
                                    <a href="tel:<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="w-100" src="<?php echo $db->getField("pic5") ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">15 лет опыта работы</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">ХОЗБЛОКИ и БЫТОВКИ для дачи в МОСКВЕ и МО</h1>
                                    <a href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Заказать </a>
                                    <a href="tel:<?php echo str_replace(" ", "", $db->getField("phone")) ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-3.png">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-4.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">О нас</p>
                    <h1 class="display-5 mb-4">Строй-Компания</h1>
                    <p class="mb-4">Работаем в этой сфере 13 лет. Все наши плотники и строители имеют высокую квалификацию.
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">15</h1>
                            <h5 class="text-white">Лет</h5>
                            <h5 class="text-white">Опыта</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Без предоплаты</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Быстро</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Большой опыт</p>
                            <p><i class="fa fa-check text-primary me-2"></i>У нас дешевле</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Высокое качество материала</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <!-- <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa-brands fa-telegram" style="color: white;"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Свяжитесь с нами</p>
                                    <h5 class="mb-0">@stroy_kompaniya</h5>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Свяжитесь с нами</p>
                                    <h5 class="mb-0"><?php echo $db->getField("phone") ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5 justify-content-center">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">15</h1>
                    <span class="fs-5 fw-semi-bold text-white">Лет опыта</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">123</h1>
                    <span class="fs-5 fw-semi-bold text-white">Клиентов</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">239</h1>
                    <span class="fs-5 fw-semi-bold text-white">Успешных проектов</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                        <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#contactModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Experienced Workers</h4>
                                    <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat amet</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Reliable Industrial Services</h4>
                                    <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat amet</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>24/7 Customer Support</h4>
                                    <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Заказать</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Наши сервисы</p>
                <h1 class="display-5 mb-4">Мы предоставляем лучшие промышленные услуги</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <?php foreach ($db->getAllServices() as $item) : ?>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid img_category" src="<?php echo $item["pic"] ?>" alt="">
                            <div class="service-img">
                                <img class="img-fluid" src="<?php echo $item["pic"] ?>" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0"><?php echo $item["name"] ?></h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white">
                                        <?php echo $item["description"] ?>
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="catalog.php?category=<?php echo $item["id"] ?>">Посмотреть</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <!-- <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p>
            <h1 class="display-5 text-white mb-5">See What We Have Completed Recently</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Auto Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Civil Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Gas Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Power Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Energy Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-6.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Water Engineering</h5>
                </div>
            </a>
        </div>
    </div> -->
    <!-- Project End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Телефоны</h4>
                        <p class="mb-2"><?php echo $db->getField("phone") ?></p>
                        <!-- <p class="mb-4">+7 968 265 90 14</p> -->
                        <a class="btn btn-primary px-4" href="tel:<?php echo str_replace(" ", "", $db->getField("phone")) ?>">Позвонить <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa-brands fa-telegram fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Telegram</h4>
                        <p class="mb-2"><?php echo $db->getField("telegram") ?></p>
                        <!-- <p class="mb-2">@stroy_kompaniya_2</p> -->
                        <a class="btn btn-primary px-4" href="https://t.me/<?php echo str_replace("@", "", $db->getField("telegram")) ?>">Написать <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Адрес</h4>
                        <p class="mb-2"><?php echo $db->getField("address") ?></p>
                        <!-- <p class="mb-4">г Москова</p> -->
                        <!-- <a class="btn btn-primary px-4" href="https://goo.gl/maps/FsznshxgnULBGgkN9" target="blank">На карте <i class="fa fa-arrow-right ms-2"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/house/ulitsa_admirala_kornilova_63/Z04YcgNhTUYGQFtvfXpzcn1qZw==/?ll=37.441658%2C55.623440&utm_medium=mapframe&utm_source=maps&z=17.95" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Адмирала Корнилова, 63 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.441658%2C55.623440&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgo0MDAyMTQzMzgwEnfQoNC-0YHRgdC40Y8sINCc0L7RgdC60LLQsCwg0L_QvtGB0LXQu9C10L3QuNC1INCc0L7RgdGA0LXQvdGC0LPQtdC9LCDRg9C70LjRhtCwINCQ0LTQvNC40YDQsNC70LAg0JrQvtGA0L3QuNC70L7QstCwLCA2MyIKDQfEFUIVJ35eQg%2C%2C&z=17.95" class="w-100" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                    <!-- <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10324.424845341035!2d37.570046238767205!3d55.724038369885236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2sMoscow!5e0!3m2!1sen!2sru!4v1682003776136!5m2!1sen!2sru" style="min-height: 450px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Свяжитесь с нами</p>
                    <h1 class="display-5 mb-4">Если у вас есть какие-либо вопросы, пожалуйста, свяжитесь с нами</h1>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Позвините</h6>
                                    <span><?php echo $db->getField("phone") ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Ваша имя</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Ваш email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Тема</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Сообщение</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.avito.ru/user/ca2c4d8d939260746db2970eba9523d6/profile?src=sharing"><img src="https://free-png.ru/wp-content/uploads/2021/11/free-png.ru-480-340x340.png" width="20"></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://t.me/<?php echo str_replace("@", "", $db->getField("telegram")) ?>"><i class="fa-brands fa-telegram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://wa.me/<?php echo str_replace(" ", "", $db->getField("phone")) ?>"><i class="fa-brands fa-square-whatsapp"></i></a>

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
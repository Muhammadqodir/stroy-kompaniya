
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="/" class="navbar-brand ps-5 me-0">
      <h2 class="text-white m-0">СтройКомпания</h2>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="/" class="nav-item nav-link active">Главная</a>
        <?php foreach ($db->getAllServices() as $item) : ?>
          <a href="catalog.php?category=<?php echo $item["id"] ?>" class="nav-item nav-link"><?php echo $item["name"] ?></a>
        <?php endforeach; ?>
        <a href="contact.html" class="nav-item nav-link">Отзывы</a>
      </div>
      <a href="" class="btn btn-primary px-3 d-none d-lg-block">Перезвонить</a>
    </div>
  </nav>
  <!-- Navbar End -->
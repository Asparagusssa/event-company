<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Ивент-агенство</title>
</head>

<div id="home">11</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#home">ЧипиЧипи</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Портфолио</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#theme">Заказать</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Контакты</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body>

  <section class="hhh container g-0">
    <div class="textImg shadow-lg p-3 mb-4 bg-body rounded">
      <h2 class="headerH">Ивент-Агентство</h2>
      <p class="headerText text-center">Хочешь устроить своему ребенку <b style="color: #0d6efd;">незабываемый</b> праздник? Тогда ты по адресу! У нас ты можешь <b style="color: #0d6efd;">легко</b> и <b style="color: #0d6efd;">быстро</b> выбрать и заказать все, что нужно для веселого и яркого события. Твой ребенок и его друзья будут в восторге от наших <b style="color: #0d6efd;">модульных</b> предложений, которые подходят для любого возраста и вкуса</p>
      <!-- <button type="button" class="btn btn-primary d-grid mx-auto col-sm-6"><span class="headerH">Выбрать мероприятие</span></button> -->
      <a class="btn btn-primary d-grid mx-auto col-sm-6 headerH" href="#theme">Выбрать мероприятие</a>
    </div>
  </section>

  <div class="container shadow-lg p-2 mb-4 bg-body rounded karusel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/headerPic.jpeg" class="d-block w-100" alt="1">
        </div>
        <div class="carousel-item">
          <img src="img/headerImg.png" class="d-block w-100" alt="2">
        </div>
        <div class="carousel-item">
          <img src="img/main1.png" class="d-block w-100" alt="3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span  class="visually-hidden">Следующий</span>
      </button>
    </div>
    <p  id="theme" class="headerH text-center" style="margin-bottom: 0;">Мероприятия на любую тематику</p>
  </div>

  <div class="container shadow-lg p-3 mb-4 bg-body rounded theme">
    <h2 class="headerH">Тематики</h2>
    <div class="d-flex flex-wrap">

        <div class="card mb-3 col-md-3 col-lg-2 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <img class="img-fluid" src="img/main2.jpeg" alt="">
        </div>
        <div class="card-body">
          <h2 class="card-title headerH">Цирк&#127914;</h2>
          <p class="text-center">Клоуны - Хлопушки&#127881;</p>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Настроить</button>
        </div>
      </div>

      <div class="card mb-3 col-md-3 col-lg-2 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <img class="img-fluid" src="img/main2.jpeg" alt="">
        </div>
        <div class="card-body">
          <h2 class="card-title headerH">Цирк&#127914;</h2>
          <p class="text-center">Клоуны - Хлопушки&#127881;</p>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Настроить</button>
        </div>
      </div><div class="card mb-3 col-md-3 col-lg-2 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <img class="img-fluid" src="img/main2.jpeg" alt="">
        </div>
        <div class="card-body">
          <h2 class="card-title headerH">Цирк&#127914;</h2>
          <p class="text-center">Клоуны - Хлопушки&#127881;</p>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Настроить</button>
        </div>
      </div><div class="card mb-3 col-md-3 col-lg-2 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <img class="img-fluid" src="img/main2.jpeg" alt="">
        </div>
        <div class="card-body">
          <h2 class="card-title headerH">Цирк&#127914;</h2>
          <p class="text-center">Клоуны - Хлопушки&#127881;</p>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Настроить</button>
        </div>
      </div><div class="card mb-3 col-md-3 col-lg-2 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <img class="img-fluid" src="img/main2.jpeg" alt="">
        </div>
        <div class="card-body">
          <h2 class="card-title headerH">Цирк&#127914;</h2>
          <p class="text-center">Клоуны - Хлопушки&#127881;</p>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Настроить</button>
        </div>
      </div><div class="card mb-3 col-md-3 col-lg-2 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <img class="img-fluid" src="img/main2.jpeg" alt="">
        </div>
        <div class="card-body">
          <h2 class="card-title headerH">Цирк&#127914;</h2>
          <p class="text-center">Клоуны - Хлопушки&#127881;</p>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Настроить</button>
        </div>
      </div>
      
    </div>
  </div>
  <script src="index.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
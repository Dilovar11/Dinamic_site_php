<?php 
include("path.php"); 
include("app/database/db.php"); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freelance.tj</title>
    <link href="bootstrap_5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>

    <!----------------------------------------- ХИДДЕР СТРАНИЦЫ ------------------------------------------------> 

    <?php include("app/include/header.php"); ?>

    <!----------------------------------------- БЛОК СТРАНИЦЫ ------------------------------------------------> 

    <!-------- БЛОК КАРУСЕЛЬ --------> 
    <br><br><br>

    <div class="container">
      <div class="container text-center">
        <div class="row">

          <div class="col">
            <div class="row">
              <div class="col-12">
                <h1>Миллионы</h1>
              </div>
              <div class="col-12">
                <h1>исполнителей</h1>
              </div>
              <div class="col-12">
                <h1>готовы вам помочь</h1>
              </div>
            </div>
          </div>

          <div class="col">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="assets/images/karusel_1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="assets/images/karusel_2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/karusel_3.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-------- БЛОК ПРОФИЛИ ФРИЛАНСЕРОВ --------> 
    <br>

    <div class="freelansers">
      <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card">
              <img src="assets/images/d.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Имя фрилансера</h5>
                <p class="card-text">Краткое описание навыков и опыта</p>
                <a href="link_to_full_profile" class="btn btn-primary">Посмотреть профиль</a>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    
    

    <!-------- БЛОК MAIN -------->
    <br>

    <div class="container">
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <a>freelance.tj - это онлайн-платформа, предназначенная для связи фрилансеров с потенциальными работодателями. Здесь вы можете найти различные проекты, связанные с веб-разработкой, дизайном, маркетингом, письменными работами и многими другими видами услуг. Чтобы использовать freelance.tj, вам нужно зарегистрироваться и создать свой профиль, указав свои навыки, опыт работы и портфолио. Затем вы можете просматривать доступные проекты, отвечать на заказы и предлагать свои услуги работодателям.</a>
          </div>
          <div class="col">
            <a>Как фрилансер, вам также следует уделять внимание своей репутации на платформе, выполнять заказы качественно и в срок, чтобы получить положительные отзывы от заказчиков. Благодаря этому ваш профиль станет более привлекательным для будущих работодателей. freelance.tj предоставляет отличную возможность найти работу или найти талантливых специалистов для своего проекта.</a>
          </div>
        </div>
      </div>

      <div class="content-row">

        <!--- MAIN CONTENT ---> 
        <div class="main-content col-md-9">
   

        </div>
    
        <!--- SIDEBAR CONTENT ---> 
        <div class="sidebar-col-md-9">

        </div>
      </div>
    </div>

    





    <script src="bootstrap_5.3.2/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/zero-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/zero.css.php">
    <link rel="stylesheet" href="./style/index.css.php">
    <link rel="stylesheet" href="./slick/slick.css">
    <link rel="stylesheet" href="./slick/slick-theme.css">

    <title>Test</title>
  </head>
  <body>
    <div id="wrapper">

      <header class="header-site">
        <div class="header-wr">
          <div class="header-l1">
            <div class="container">
              <div class="header-l1-in">
                <div class="site-branding">
                  <button class="burger-btn" id="burger"><span></span><span></span><span></span></button>
                  <img src="./img/logo.jpg" alt="logo site" class="logo">
                </div>
                <div class="site-description">Внедрение профессиональных материалов Стрим</div>
                <div class="header-branding-tel">
                    <img class="img-tel" src="./img/tel.png" alt="mark tel">
                    <a class="number-tel" href="tel:+375 29 617-04-22">+375 29 617-04-22</a>
                    <a href="#" class="link-tel ">Обратный звонок</a>
                </div>
              </div>
            </div>  
          </div>

        <nav class="header-navigation">
          <div class="container">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#">ПРЕЗЕНТАЦИИ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">КАТАЛОГ</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">ИНФОРМАЦИЯ</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ПАРТНЕРЫ</a>
              </li>
              <li id="last-link" class="nav-item">
                <a class="nav-link" href="#">КОНТАКТЫ</a>
              </li>
            </ul>
          </div>  
        </nav>
      </header>

      <main class="main-site">
        <section class="main-block">
          <div class="container main-container">
            <div class="wrapper-block">
              <div class="mone-in">            
                <div class="block-topic">Современные технологии<br>и материалы для комплексных<br>решений</div>
                  <ul class="block-list">
                    <li>Оптимальное соотношение качества и цены</li>
                    <li>Весь товар сертифицирован</li>
                    <li>Минимальные сроки поставки</li>
                    <li>Многолетний опыт</li>
                    <li>Индивидуальный подход к каждому клиенту</li>
                  </ul>
                  <button type="button" class="pum-trigger">Связаться с нами</button>
                </div>



              <div class="mone-img">
                <img src="./img/pot.png" alt="construction materials">
              </div>

            </div>
          </div>
        </section>

        <section class="second-sect">
          <div class="container">
            <div class="title-m">
              Информационные презентации
              <span>для комплексных решений</span>
            </div>
             <div id="wrapper_slick-list">
                  <?php
                
                  include './php/first_carouse.php';
               
                  ?>
           </div>
        </section>

        <section class="third-sect">
          <div class="container">
          <div class="title-m title-second">
              Потребители продукции
              <span>НПО «СТРИМ»</span>
            </div>
            <div id="wrapper_slick-list_block_third">
                  <?php
                
                  include './php/second_carousel.php';
               
                  ?>
           </div>
          </div>
        </section>
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src ="./slick/slick.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/second_index.js"></script>
  </body> 
</html>

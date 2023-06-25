<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="product.css" />
    <link rel="stylesheet" href="../../css/product.css">
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Stick</title>
  </head>

  <body>
  <header id="header">
<div class="menu-burger__header">
    <span></span>
  </div>
    <div class="header__nav">
      <ul class="menu header__menu">
        <li><a href="../main/main.php" class="link">Главная</a></li>
        <li><a href="../about/about.php" class="link">О Компании</a></li>
        <li id="nav-button" class="nav-button">Оборудование</li>
        <div id="navigation" class="drop-down-menu">
          <a href="../tool/tool.html" class="navigation"><li class="li-navigation">Инструменты</li></a>
          <a href="../furniture/furniture.html" class="navigation"><li class="li-navigation">Мебель</li></a>
        </div>
      </ul>
    </div>
    <img src="../../img/logo(black).png" alt="Logo" class="logo" data-white-logo="../../img/logo(white).png" width="10%" />
    <div class="contacts">
      <p class="download" id="p-header">
        <a href="../../catalog/catalog.pdf" id="catalog-header">Каталог</a>
      </p>
      <p class="phone" id="phone-header">
        <img src="../../img/phoneHeader.png" alt="Phone" class="phone-header" width="20vw" height="20vh" data-white-phone="../../img/phonewhite.png"/>+375 176 58-16-16
      </p>
      <a href="../contact/contact.html"><button class="button-header">Контакты</button></a>
    </div>
  </header>
    <main id="main">
      <h2 class="header-text" id="name-tool">Мойки медицинские</h2>
      <div class="product-box">
        <div>
          <img src="../../img/product/stick6.jpg" alt="Продукт" />
        </div>
        <div class="info-product">
          <p class="text-product">
          Тумбочка с накладной сдвоенной мойкой из нержавеющей стали и смесителем; с металлическими дверями. <br>
          Габаритные размеры чаши мойки — 345x375x120 мм.<br>
          Ширина, мм — 800<br>
          Глубина, мм — 600<br>
          Высота, мм — 880<br>
          Тумбочка М2 кат. № 508 002 — нержавеющая текстурированная сталь
          Тумбочка М2 кат. № 508 008 — нержавеющая сталь с полимерным покрытием
          </p>
          <div class="message-box"></div>
          <div class="order">
            <h2 class="price">Цена: <span id="price-on-ed">140</span> BYN / 1</h2>
            <button class="button-order">Заказать</button>
          </div>
        </div>
      </div>
    </main>
    <form class="air" id="air" >
      <div class="form-inner">
          <div class="form-row-icon">
              <label for="name">ФИО</label>
              <input type="text" id="name" name="name" required>
          </div>
          <div class="form-row-icon">
              <label for="email">Почта</label>
              <input type="email" id="email" name="email" required>
          </div>
          <div class="form-row-icon">
              <label for="phone">Телефон</label>
              <input type="text" id="phone" name="phone" required>
          </div>
          <div class="form-row-icon">
              <label for="date">Дата получения</label>
              <input type="date" id="date" name="date" required>
          </div>
          <div class="form-row-icon">
              <label for="tov">Товар</label>
              <input type="text" id="tov" disabled>
          </div>
          <div class="form-row-icon">
              <label for="quantity">Количество товара</label>
              <input type="number" id="quantity" class="quantity" name="quantity" required>
          </div>
          <div class="form-row-icon">
              <label for="price">Цена за единицу товара</label>
              <input type="number" id="price" name="price" disabled>
          </div>
          <div class="form-row-icon">
              <label for="sum">Общая сумма</label>
              <input type="number" id="sum" name="sum" required disabled>
          </div>
          <div class="form-row-send">
          <input type="submit" value="Отправить" id="send-btn" class="product-send">
          <button class="button-order">Отмена</button>
          </div>
      </div>
  </form>
    <footer>
      <div class="footer-box">
        <div>
          <img src="../../img/logo(white).png" alt="Logo" />
        </div>
        <div class="navigation">
          <h2 class="footer-h2">Навигация:</h2>
          <p><a href="../main/main.php" class="footer-menu">Главная</a></p>
          <p><a href="../about/about.php" class="footer-menu">О Компании</a></p>
          <p><a href="../../catalog/catalog.pdf" class="footer-menu">Оборудование</a></p>
        </div>
        <div class="adress">
          <h2 class="footer-h2">Наш адресс:</h2>
          <p class="footer-p">
            222304, Республика Беларусь<br />
            г. Молодечно, ул. Металлистов, 8
          </p>
        </div>
        <div class="footer-contacts">
          <h2 class="footer-h2">Контакты:</h2>
          <p class="footer-p">
            Моб. тел: (Сергей Васильевич) <br />
            +375 29 504 67 51 <br />
            +375 29 391 53 43
          </p>
          <p class="footer-p">
            Отдел сбыта: телефон/факс: +375 176 54 16 76 <br />
            телефон: +375 176 58 16 16 <br />
            E-mail: strumsb@tut.bystrummed@mail.ru
          </p>
          <p class="footer-p">
            Отдел снабжения: +375 176 58 16 12 <br />
            E-mail: strumsnab@tut.by
          </p>
          <p class="footer-p">
            Бухгалтерия: +375 176 58 16 14 <br />
            E-mail: strumbuh@tut.by
          </p>
        </div>
      </div>
    </footer>
    <script src="../../js/product.js"></script>
    <script src="../../js/header.js"></script>
    <script src="../../js/burgermenu.js"></script>
  </body>
</html>

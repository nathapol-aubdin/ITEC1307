<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Wombat Coffee Roasters</title>
  <link rel="stylesheet" href="css/listing2.css">
  <link rel="stylesheet" href="css/listing3.css">
  <link rel="stylesheet" href="css/listing5.css">
  <link rel="stylesheet" href="css/listing7.css">
  <link rel="stylesheet" href="css/listing8.css">
  <link rel="stylesheet" href="css/listing9.css">
  <link rel="stylesheet" href="css/listing10.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
  <link href="fontawesome/css/all.min.css" rel="stylesheet" />
  <link href="css/tooplate-chilling-cafe.css" rel="stylesheet" />
  
<!--Tooplate 2118 Chilling Cafe
https://www.tooplate.com/view/2118-chilling-cafe
-->
</head>
<style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #3A4A59;
}

.button1:hover {
  background-color: #3A4A59;
  color: white;
}
</style>
<body>
  <header id="header" class="page-header">
    <div class="title">
      <h1>Wombat Coffee Roasters</h1>
      <div class="slogan">We love coffee</div>
    </div>
  </header>
  <nav class="menu" id="main-menu">
    <button class="menu-toggle" id="toggle-menu">
      toggle menu
    </button>
    <div class="menu-dropdown">
      <ul class="nav-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/shop">Shop</a></li>
        <li><a href="/menu">Menu</a></li>
        <li><a href="/brew">Brew</a></li>
      </ul>
    </div>
  </nav>
  <div class="tm-container">
    <div class="tm-text-white tm-page-header-container">
      <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
      <h1 class="tm-page-header">Wombat Coffee Roasters</h1>
    </div>
    <div class="tm-main-content">
      <div id="tm-intro-img"></div>
      <!-- Coffee Menu -->
      <section class="tm-section">
        <h2 class="tm-section-header">Coffee Menu</h2>
        <div class="tm-responsive-table">
          <table>
            <tr class="tm-tr-header">
              <th>&nbsp;</th>
              <th>Hot</th>
              <th>Iced</th>
              <th>Blended</th>
            </tr>
            <tr>
              <td class="tm-text-left">Americano</td>
              <td> <button class="button button1">$10</button> </td>
              <td> <button class="button button1">$15</button> </td>
              <td> -</td>
            </tr>
            <tr>
              <td class="tm-text-left">Cuppucino</td>
              <td><button class="button button1">$15</button></td>
              <td><button class="button button1">$18</button></td>
              <td><button class="button button1">$20</button></td>
            </tr>
            <tr>
              <td class="tm-text-left">Fresh Latte</td>
              <td><button class="button button1">$10</button></td>
              <td><button class="button button1">$18</button></td>
              <td><button class="button button1">$20</button></td>
            </tr>
            <tr>
              <td class="tm-text-left">Mocha</td>
              <td><button class="button button1">$15</button></td>
              <td><button class="button button1">$18</button></td>
              <td><button class="button button1">$20</button></td>
            </tr>
            <tr>
              <td class="tm-text-left">Espresso</td>
              <td><button class="button button1">$10</button></td>
              <td><button class="button button1">$15</button></td>
              <td>-</td>
            </tr>
            <tr>
              <td class="tm-text-left">Black Coffee</td>
              <td><button class="button button1">$15</button></td>
              <td>-</td>
              <td>-</td>
            </tr>
            <tr>
              <td class="tm-text-left">Double Shot Expresso</td>
              <td><button class="button button1">$20</button></td>
              <td><button class="button button1">$20</button></td>
              <td>-</td>
            </tr>
          </table>
        </div>
      </section>

      <!-- Tea Menu -->
      <section class="tm-section">
        <h2 class="tm-section-header">Tea Menu</h2>
        <div class="tm-responsive-table">
          <table>
            <tr class="tm-tr-header">
              <th>&nbsp;</th>
              <th>Hot</th>
              <th>Iced</th>
              <th>Addon</th>
            </tr>
            <tr>
              <td class="tm-text-left">Pure White Milk</td>
              <td><button class="button button1">$5</button></td>
              <td><button class="button button1">$10</button></td>
              <td>-</td>
            </tr>
            <tr>
              <td class="tm-text-left">Hong Kong Tea</td>
              <td><button class="button button1">$8</button></td>
              <td><button class="button button1">$12</button></td>
              <td><button class="button button1">$4</button></td>
            </tr>
            <tr>
              <td class="tm-text-left">Taiwan Tea</td>
              <td><button class="button button1">$4</button></td>
              <td><button class="button button1">$10</button></td>
              <td><button class="button button1">$4</button></td>
            </tr>
            <tr>
              <td class="tm-text-left">Bubble Tea</td>
              <td><button class="button button1">$8</button></td>
              <td><button class="button button1">$12</button></td>
              <td>-</td>
            </tr>
            <tr>
              <td class="tm-text-left">Mixed Fruit Tea</td>
              <td><button class="button button1">$10</button></td>
              <td><button class="button button1">$10</button></td>
              <td><button class="button button1">$8</button></td>
            </tr>
            <tr>
              <td class="tm-text-left">Original Tea</td>
              <td><button class="button button1">$12</button></td>
              <td><button class="button button1">$12</button></td>
              <td>-</td>
            </tr>
          </table>
        </div>
      </section>

      <!-- Special Items -->
      <section class="tm-section">
        <h2 class="tm-section-header">Special Items</h2>
        <div class="tm-special-items">
          <figure class="tm-special-item">
            <img src="img/chilling-cafe-11.jpg" alt="Image" class="tm-special-item-img" />
            <figcaption>
              <span class="tm-item-name">Soft Deli Cup</span>
              <span class="tm-item-price"><button class="button button1">$25</button></span>
            </figcaption>
          </figure>
          <figure class="tm-special-item">
            <img src="img/chilling-cafe-12.jpg" alt="Image" class="tm-special-item-img" />
            <figcaption>
              <span class="tm-item-name">Coffee Art</span>
              <span class="tm-item-price"><button class="button button1">$30</button></span>
            </figcaption>
          </figure>
          <figure class="tm-special-item">
            <img src="img/chilling-cafe-13.jpg" alt="Image" class="tm-special-item-img" />
            <figcaption>
              <span class="tm-item-name">Speciality Tea</span>
              <span class="tm-item-price"><button class="button button1">$35</button></span>
            </figcaption>
          </figure>
        </div>
      </section>
      <hr />
    </div>
    <footer>
      <p class="tm-text-white tm-footer-text">
        Copyright &copy; 2020 Company Name
        . Design:
        <a href="https://www.tooplate.com" class="tm-footer-link">Tooplate</a>
      </p>
    </footer>
  </div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script>
    $(function() {
      // Adjust intro image height based on width.
      $(window).resize(function() {
        var img = $("#tm-intro-img");
        var imgWidth = img.width();

        // 640x425 ratio
        var imgHeight = (imgWidth * 425) / 640;

        if (imgHeight < 300) {
          imgHeight = 300;
        }

        img.css("min-height", imgHeight + "px");
      });
    });
  </script>
</body>

</html>
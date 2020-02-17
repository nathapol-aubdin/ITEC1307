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
      <div><img src="https://adaybulletin.com/wp-content/uploads/2019/10/feature_life_TheCoffeeDiaries_GalapagosCoffee3.jpg" alt=""></div>
      <hr />
      <!-- About our cafe -->
      <section class="tm-section tm-section-small">
        <h2 class="tm-section-header">About our cafe</h2>
        <p>
            Wombat Coffee Roasters คือร้านกาแฟออนไลน์ที่มีเมนูให้ลูกค้าสามารถเลือกได้มากมายหลายชนิด
            ไม่ว่าจะเป็น กาแฟ หรือ ชา ซึ่งจะมีให้เลือกย่อยลงไปอีก เช่น แบบร้อน หรือ เย็น และในบางเมนู
            สามารถเพิ่ม Topping เข้าไปยังเมนูได้อีกด้วย.
        </p>
        <p class="tm-mb-0">
          เว็บไซต์นี้เป็นส่วนหนึงของวิชา E-Commerce รหัส Itec1307
        </p>
      </section>
      <hr />
      <!-- Talk to us -->
      <section class="tm-section tm-section-small">
        <h2 class="tm-section-header">ช่องทางการติดต่อ</h2>
        <p class="tm-mb-0">
            ติดต่อเราผ่านทาง
          <a href="mailto:info@example.com" class="tm-contact-link">Email</a>
            หรือติดตามเราบนไอคอนโซเชียลด้านล่าง ขอขอบคุณ.
        </p>
        <div class="tm-social-icons">
          <div class="tm-social-link-container">
            <a href="https://fb.com/tooplate" class="tm-social-link">
              <i class="fab fa-facebook"></i>
            </a>
          </div>
          <div class="tm-social-link-container">
            <a href="https://twitter.com" class="tm-social-link">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
          <div class="tm-social-link-container">
            <a href="https://instagram.com" class="tm-social-link">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
          <div class="tm-social-link-container">
            <a href="https://pinterest.com" class="tm-social-link">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </section>
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
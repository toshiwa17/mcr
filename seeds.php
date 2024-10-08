<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <script src="https://kit.fontawesome.com/0d44012c2d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <title>MCR Agriventure</title>
  <script>
    function searchProducts() {
      var input, filter, sections, products, i, j, h3, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      sections = document.getElementsByClassName("products-col");

      for (i = 0; i < sections.length; i++) {
        products = sections[i].getElementsByClassName("desc");
        for (j = 0; j < products.length; j++) {
          h3 = products[j].getElementsByTagName("h3")[0];
          txtValue = h3.textContent || h3.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            sections[i].style.display = "";
            break;
          } else {
            sections[i].style.display = "none";
          }
        }
      }
    }
  </script>
</head>

<body>
  <?php
  require_once "head.php";
  ?>
  <!--Categories-->
  <div class="nav-categories">
    <ul class="nav-cat">
      <li><a href="seeds" class="active">Seeds</a></li>
      <li><a href="garden-equipment">Garden Equipments</a></li>
      <li><a href="pets">Pets</a></li>
      <li><a href="veterinary">Veterinary</a></li>
    </ul>
  </div>

  <div class="products">
    <div id="alphabet" class="w-100">
      <span class="letter">A</span>
      <span class="letter">B</span>
      <span class="letter">C</span>
      <span class="letter">D</span>
      <span class="letter">E</span>
      <span class="letter">F</span>
      <span class="letter">G</span>
      <span class="letter">H</span>
      <span class="letter">I</span>
      <span class="letter">J</span>
      <span class="letter">K</span>
      <span class="letter">L</span>
      <span class="letter">M</span>
      <span class="letter">N</span>
      <span class="letter">O</span>
      <span class="letter">P</span>
      <span class="letter">Q</span>
      <span class="letter">R</span>
      <span class="letter">S</span>
      <span class="letter">T</span>
      <span class="letter">U</span>
      <span class="letter">V</span>
      <span class="letter">W</span>
      <span class="letter">X</span>
      <span class="letter">Y</span>
      <span class="letter">Z</span>
    </div>
    <section class="seeds" id="seeds">
      <h2>SEEDS</h2>
      <div class="row1">
        <div class="products-col">
          <div class="image">
            <img src="Products/Seeds/Banate%20King.png" alt="Banate King" />
            <div class="check-out">
              <button onclick="location='https://www.lazada.com.ph/shop/mcragriventurecorporation'">Lazada</button>
              <button onclick="location='https://shopee.ph/mcragriventure'">Shoppe</button>
            </div>
          </div>
          <div class="desc">
            <h3>Talong/Eggplant</h3>
            <p>Banate King F1</p>
          </div>
        </div>
        <div class="products-col">
          <div class="image">
            <img src="Products/Seeds/Bongga.png" alt="Bongga" />
            <div class="check-out">
            <button onclick="location='https://www.lazada.com.ph/shop/mcragriventurecorporation'">Lazada</button>
              <button onclick="location='https://shopee.ph/mcragriventure'">Shoppe</button>
            </div>
          </div>
          <div class="desc">
            <h3>Sitaw/String Beans</h3>
            <p>Bongga</p>
          </div>
        </div>
      </div>
      <div class="row1">
        <div class="products-col">
          <div class="image">
            <img src="Products/Seeds/Django%20Dos%20F1.png" alt="Django Dos F1" />
            <div class="check-out">
              <button onclick="location='https://www.lazada.com.ph/shop/mcragriventurecorporation'">Lazada</button>
              <button onclick="location='https://shopee.ph/mcragriventure'">Shoppe</button>
            </div>
          </div>
          <div class="desc">
            <h3>Sili/Chili</h3>
            <p>Django Dos F1</p>
          </div>
        </div>
        <div class="products-col">
          <div class="image">
            <img src="Products/Seeds/Dulce%20F1.png" alt="Dulce F1" />
            <div class="check-out">
             <button onclick="location='https://www.lazada.com.ph/shop/mcragriventurecorporation'">Lazada</button>
              <button onclick="location='https://shopee.ph/mcragriventure'">Shoppe</button>
            </div>
          </div>
          <div class="desc">
            <h3>Melon</h3>
            <p>Dulce F1</p>
          </div>
        </div>
      </div>
      <div class="row1">
        <div class="products-col">
          <div class="image">
            <img src="Products/Seeds/Fortuner%20F1.png" alt="Fortuner F1" />
            <div class="check-out">
             <button onclick="location='https://www.lazada.com.ph/shop/mcragriventurecorporation'">Lazada</button>
              <button onclick="location='https://shopee.ph/mcragriventure'">Shoppe</button>
            </div>
          </div>
          <div class="desc">
            <h3>Talong/Eggplant</h3>
            <p>Fortuner F1</p>
          </div>
        </div>
        <div class="products-col">
          <div class="image">
            <img src="Products/Seeds/Mayumi%20F1.png" alt="Mayumi F1" />
            <div class="check-out">
             <button onclick="location='https://www.lazada.com.ph/shop/mcragriventurecorporation'">Lazada</button>
              <button onclick="location='https://shopee.ph/mcragriventure'">Shoppe</button>
            </div>
          </div>
          <div class="desc">
            <h3>Upo/Battle Gourd</h3>
            <p>Mayumi F1</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--Call to Action-->
  <section class="cta-header">
    <div class="cta">
      <h1 class="h4">
        We can help you grow your business by providing a quality and
        <br />affordable livestock feeds and equipments for your agricultural
        needs.
      </h1>
      <h2>#FuelsThePassionInAgriculture</h2>
      <a href="contact.html" class="hero-btn">
        <button><i class="fas fa-phone-alt"></i> Contact Us</button>
      </a>
    </div>
  </section>
  <!--Footer-->
  <section class="footer">
    <h4>About us</h4>
    <p>
      The MCR Agriventure Corporation offers agricultural and veterinary
      products. <br />It engaged in wholesaling, distribution and retailing of
      agricultural product
    </p>
    <div class="icons">
      <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-tiktok"></i></a>
    </div>
    <p>Made by MCR Agriventure</p>
  </section>
  <!--Javascript for Toggle Menu-->
  <script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
      navLinks.style.right = "0";
    }

    function hideMenu() {
      navLinks.style.right = "-200px";
    }
  </script>
</body>

</html>
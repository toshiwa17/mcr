<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <script src="https://kit.fontawesome.com/0d44012c2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <title>
        MCR Agriventure
    </title>
</head>
<style>
    .inner-container h1 {
        font-size: 16px;
        font-weight: 900;
    }

    .inner-container h2 {
        margin-top: 17px;
        font-size: 15px;
        text-align: center;
        font-weight: 400;
    }

    .img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('Events/Banner.jpg');
        height: 25%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .inner-container {
        text-align: center;
        position: absolute;
        width: 95%;
        color: white;
        height: auto;
    }
</style>

<body>
    <?php
    require_once "head.php";
    ?>
    <!-- News And Events -->
    <div style="position: relative; width: 100%;">
        <!-- Background image -->
        <img src="Picture/career.png" style="width: 100%; display: block;">

        <!-- Foreground image -->
        <div style="position: relative;text-align: center;color: white; width: 100%;">
            <img src="Picture/career - Copy.png" style="width: 100%; display: block; position: relative;">

            <div class="d-none d-sm-block"><!-- Floating text -->
                <div style="position: absolute; bottom: 36vh; left: 3vw; color: black; text-align: left;font-size:2rem">
                    Please submit your resume at the<br>
                    <b><a href="Branches" style="color:red;font-size:2rem">MCR Retail Trade location near you.</a></b>
                </div>

                <div style="position: absolute; bottom: 24vh; left: 3vw; color: black; text-align: left;">
                    <button class="btn btn-danger" style="font-size:2rem"
                        onclick="location='https://forms.gle/HVZLdo5hpMCmrh8b9'"><b>APPLY NOW!</b></button>
                </div>
            </div>

            <div class="d-block d-sm-none"><!-- Floating text -->
                <div style="position: absolute; bottom: 10vh; left: 3vw; color: black; text-align: left;font-size:0.55rem">
                    Please submit your resume at the<br>
                    <b><a href="Branches" style="color:red;font-size:0.55rem">MCR Retail Trade location near you.</a></b>
                </div>

                <div style="position: absolute; bottom: 4vh; left: 3vw; color: black; text-align: left;">
                    <button class="btn btn-danger" style="font-size:0.55rem"
                        onclick="location='https://forms.gle/HVZLdo5hpMCmrh8b9'"><b>APPLY NOW!</b></button>
                </div>
            </div>

        </div>
    </div>



    <!--Call to Action-->
    <section class="cta-header">
        <div class="cta">
            <h1 class="h4">We can help you grow your business by providing a quality and <br>affordable livestock feeds
                and
                equipments for your agricultural needs.</h1>
            <h2>#FuelsThePassionInAgriculture</h2>
            <a href="contact" class="hero-btn">
                <button>Contact Us</button>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer small">
        <h4>About us</h4>
        <p>The MCR Agriventure Corporation offers agricultural and veterinary products.
            It is engaged in wholesaling, distribution, and retailing of agricultural products.</p>
        <div class="icons">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
        <p>Made by MCR Agriventure</p>
    </section>

    <!-- JavaScript for Toggle Menu -->
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
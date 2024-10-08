<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <script src="https://kit.fontawesome.com/0d44012c2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>
        MCR Agriventure
    </title>
</head>

<body>
    <?php
    require_once "head.php";
    ?>
    <div class="title">Contact us</div>


    <!--Location-->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.5301983235977!2d122.56636021424549!3d10.693527263643809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee564fb67fe19%3A0x409c835c1447a195!2sMCR%20Agri-Venture!5e0!3m2!1sen!2sph!4v1635991247992!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>



    <!--Contact Us-->
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>25 J. De Leon St.</h5>
                        <p>Iloilo City, Iloilo 5000</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone-alt"></i>
                    <span>
                        <h5>(033) 337 - 3685</h5>
                        <h5>+63998 547 8746</h5>
                        <p>Monday to Saturday | 8am-5pm</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5>sales@mcragriventure.com</h5>
                        <p>Email us your inquiry</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="sendmail" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="sender" placeholder="Enter email address" required>
                    <input type="subject" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="content" placeholder="Message" required></textarea>
                    <button type="submit" name="send" class="button">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!--Footer-->
    <section class="footer">
        <h4>About us</h4>
        <p>The MCR Agriventure Corporation offers agricultural and veterinary products.
            <br>It engaged in wholesaling, distribution and retailing of agricultural product
        </p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-tiktok"></i>
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
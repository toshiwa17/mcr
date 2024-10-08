<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <script src="https://kit.fontawesome.com/0d44012c2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
    <div class="news container mt-3">
        <h1>News And Events</h1>

        <!-- First Event -->
        <div>
            <p class="my-3">Udyukan Festival 2023 in Kabankalan City. MCR Agriventure Corporation proudly joins the Agro
                Fair 2023!</p>
            <!-- Bootstrap Carousel -->
            <center>
                <div id="imageCarousel" class="carousel slide text-center" data-bs-ride="carousel" style="width: 40%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Events/Kabankalan/agro2.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#agro2Modal" alt="Agro 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Kabankalan/agro1.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#agro1Modal" alt="Agro 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Kabankalan/agro.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#agroModal" alt="Agro">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Kabankalan/agro3.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#agro3Modal" alt="Agro 3">
                        </div>
                    </div>
                    <!-- Modal for Agro 2 -->
                    <div class="modal fade" id="agro2Modal" tabindex="-1" aria-labelledby="agro2ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Kabankalan/agro2.jpg" class="d-block w-100" alt="Agro 2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Agro 1 -->
                    <div class="modal fade" id="agro1Modal" tabindex="-1" aria-labelledby="agro1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Kabankalan/agro1.jpg" class="d-block w-100" alt="Agro 1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Agro -->
                    <div class="modal fade" id="agroModal" tabindex="-1" aria-labelledby="agroModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Kabankalan/agro.jpg" class="d-block w-100" alt="Agro">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Agro 3 -->
                    <div class="modal fade" id="agro3Modal" tabindex="-1" aria-labelledby="agro3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Kabankalan/agro3.jpg" class="d-block w-100" alt="Agro 3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </center>
            <hr class="bg-dark">
        </div>

        <!-- Second Event  -->
        <div>
            <p class="my-3">MCR Agriventure Corporation is delighted to be a part of Farmers and Cooperative Week with
                the
                theme "Mangunguma suportahan, Kooperatiba itib-ong," held at Gabaldon Building, City of Passi, Iloilo.
            </p>
            <!-- Bootstrap Carousel for Passi Images -->
            <center>
                <div id="PassiCarousel" class="carousel slide text-center" data-bs-ride="carousel" style="width: 40%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Events/Passi/Passi.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#PassiModal" alt="Passi">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Passi/passi1.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#passi1Modal" alt="Passi 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Passi/passi2.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#passi2Modal" alt="Passi 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Passi/passi3.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#passi3Modal" alt="Passi 3">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Passi/passi4.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#passi4Modal" alt="Passi 4">
                        </div>
                    </div>
                    <!-- Modal for Passi -->
                    <div class="modal fade" id="PassiModal" tabindex="-1" aria-labelledby="passiModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Passi/Passi.jpg" class="d-block w-100" alt="Passi">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Passi 1 -->
                    <div class="modal fade" id="passi1Modal" tabindex="-1" aria-labelledby="passi1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Passi/passi1.jpg" class="d-block w-100" alt="Passi 1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Passi 2 -->
                    <div class="modal fade" id="passi2Modal" tabindex="-1" aria-labelledby="passi2ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Passi/passi2.jpg" class="d-block w-100" alt="Passi 2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Passi 3 -->
                    <div class="modal fade" id="passi3Modal" tabindex="-1" aria-labelledby="passi3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Passi/passi3.jpg" class="d-block w-100" alt="Passi 3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Passi 4 -->
                    <div class="modal fade" id="passi4Modal" tabindex="-1" aria-labelledby="passi3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Passi/passi4.jpg" class="d-block w-100" alt="Passi 4">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#passiCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#passiCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </center>
            <hr class="bg-dark">
        </div>

        <!-- Third Event  -->
        <div>
            <p class="my-3">MCR Agriventure Corporation is thrilled to be a key exhibitor at Fresh Finds.
            </p>
            <!-- Bootstrap Carousel for Passi Images -->
            <center>
                <div id="FreshCarousel" class="carousel slide text-center" data-bs-ride="carousel" style="width: 40%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Events/Fresh/Fresh.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#FreshModal" alt="Fresh">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Fresh/Fresh1.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#Fresh1Modal" alt="Fresh 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Fresh/Fresh2.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#Fresh2Modal" alt="Fresh 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Fresh/Fresh3.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#Fresh3Modal" alt="Fresh 3">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Fresh/Fresh4.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#Fresh4Modal" alt="Fresh 4">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Fresh/Fresh5.jpg" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#Fresh5Modal" alt="Fresh 5">
                        </div>
                    </div>
                    <!-- Modal for Fresh -->
                    <div class="modal fade" id="FreshModal" tabindex="-1" aria-labelledby="FreshModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Fresh/Fresh.jpg" class="d-block w-100" alt="Passi">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Fresh 1 -->
                    <div class="modal fade" id="Fresh1Modal" tabindex="-1" aria-labelledby="Fresh1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Fresh/Fresh1.jpg" class="d-block w-100" alt="Fresh 1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Fresh 2 -->
                    <div class="modal fade" id="Fresh2Modal" tabindex="-1" aria-labelledby="Fresh2ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Fresh/Fresh2.jpg" class="d-block w-100" alt="Fresh 2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Fresh 3 -->
                    <div class="modal fade" id="Fresh3Modal" tabindex="-1" aria-labelledby="Fresh3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Fresh/Fresh3.jpg" class="d-block w-100" alt="Fresh 3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Fresh 4 -->
                    <div class="modal fade" id="Fresh4Modal" tabindex="-1" aria-labelledby="Fresh4ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Fresh/Fresh4.jpg" class="d-block w-100" alt="Fresh 4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Fresh 5 -->
                    <div class="modal fade" id="Fresh5Modal" tabindex="-1" aria-labelledby="Fresh5ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Fresh/Fresh5.jpg" class="d-block w-100" alt="Fresh 5">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#FreshCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#FreshCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </center>
            <hr class="bg-dark">
        </div>

        <!-- Fourth Event  -->
        <div>
            <p class="my-3">Tail Tales by MCR Agriventure Corporation is thrilled to be the key exhibitor at THE GRANDEST BUSINESS EXPO IN ILOILO! PCCI-Iloilo chapter presents Iloilo Business Expo ILOBEX.

            </p>
            <!-- Bootstrap Carousel for Passi Images -->
            <center>
                <div id="IlobexCarousel" class="carousel slide text-center" data-bs-ride="carousel" style="width: 40%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Events/Ilobex/bex1.png" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#bex1Modal" alt="bex1">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Ilobex/bex2.png" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#bex2Modal" alt="bex2">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Ilobex/bex3.png" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#bex3Modal" alt="bex3">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Ilobex/bex4.png" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#bex4Modal" alt="bex4">
                        </div>
                        <div class="carousel-item">
                            <img src="Events/Ilobex/bex5.png" class="d-block w-100" data-bs-toggle="modal" data-bs-target="#bex5Modal" alt="bex5">
                        </div>
                    </div>

                    <!-- Modal for bex1 -->
                    <div class="modal fade" id="bex1Modal" tabindex="-1" aria-labelledby="bex1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Ilobex/bex1.png" class="d-block w-100" alt="bex1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for bex2 -->
                    <div class="modal fade" id="bex2Modal" tabindex="-1" aria-labelledby="bex2ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Ilobex/bex2.png" class="d-block w-100" alt="bex2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for bex3 -->
                    <div class="modal fade" id="bex3Modal" tabindex="-1" aria-labelledby="bex3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Ilobex/bex3.png" class="d-block w-100" alt="bex3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for bex4 -->
                    <div class="modal fade" id="bex4Modal" tabindex="-1" aria-labelledby="bex4ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Ilobex/bex4.png" class="d-block w-100" alt="bex4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for bex5 -->
                    <div class="modal fade" id="bex5Modal" tabindex="-1" aria-labelledby="bex5ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="Events/Ilobex/bex5.png" class="d-block w-100" alt="bex5">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#IlobexCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#IlobexCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </center>
            <hr class="bg-dark">
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
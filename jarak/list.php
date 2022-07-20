<?php
// baca data yang ada pada file process.txt
$file = fopen("process.txt", "r");
$data = file_get_contents("process.txt");
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Website Pencarian Harga Kirim</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="mobile-menu-overlay"></div>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Marshmallow"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
                    <img src="images/logo-dark.svg" class="logo-mobile-menu" alt="logo">
                    <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
                </div>
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-body-wrapper">
        <section id="home" class="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-banner">
                            <div class="d-sm-flex justify-content-between">
                                <div data-aos="zoom-in-up">
                                    <div class="banner-title">
                                        <h3 class="font-weight-medium">We Help Power
                                            Millions Of Businesses
                                            in 100+ Countries
                                        </h3>
                                    </div>
                                    <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.

                                        <br>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <a href="#" class="btn btn-secondary mt-3">Learn more</a>
                                </div>
                                <div class="mt-5 mt-lg-0">
                                    <img src="images/logo.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-process" id="about">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <th>Nama</th>
                        <th>Jarak</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                        <?php
                        // membaca data dari file process.txt
                        $data = explode("\n", $data);
                        foreach ($data as $value) {
                            $data = explode("|", $value);
                            echo "<tr>";
                            echo "<td>" . $data[0] . "</td>";
                            echo "<td>" . $data[1] . " KM</td>";
                            echo "<td>" . $data[2] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <p class="mb-0 text-small pt-1 text-center">© 2019-2020 All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.js"></script>
    <script src="vendors/aos/js/aos.js"></script>
    <script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
    <script src="js/template.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootsrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Bootstrap JS & Poppers -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navigation starts here -->
    <?php
        require 'php/nav.php';
    ?>
    <!-- Navigation Ends here -->
    <!-- Slider Starts -->
    <?php
        require 'php/slider.php';
    ?>
    <!-- Slider Ends -->
    <!-- Down Arrow Below Slider Starts -->
    <div class="alert alert-secondary" role="alert" style="padding-top:0px; padding-bottom:0px">
    <h3 class="text-center"><i class="bi bi-arrow-down-circle"></i></h3>
    </div>
    <!-- Down Arrow Below Slider Ends -->

    <h2 class="text-center" id="travels">Places</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="place-details.html" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="place-details.html" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="place-details.html" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="place-details.html" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="place-details.html" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="place-details.html" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>
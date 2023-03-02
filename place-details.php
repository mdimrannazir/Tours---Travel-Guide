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

    <!-- Hero Gallery Starts -->
    <div class="container">
        <div class="image-container">
            <img src="images/img-2.jpg" alt="Left Image" class="left-img">
            <div class="right-imgs">
                <img src="images/img-1.jpg" alt="Right Image 1">
                <img src="images/img-1.jpg" alt="Right Image 2">
            </div>
        </div>
    </div>
    <!-- Place Details Starts -->
        <div class="container">
            <h2 class="">Place Name</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, autem excepturi! Voluptatem id impedit quod similique aliquam, officiis qui corrupti optio ab voluptas cupiditate ipsam labore. In explicabo asperiores alias.</p>
        </div>
    <!-- Place Details Starts -->
 
<div class="container">
    <br><br>
    <!-- Stay Starts -->
    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-dark">
                        <h3>Stay</h3>
                        <p>List of places you can choose to stay in.</p>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
<!-- Stay Ends -->
<br><br>
<!-- Activities Starts -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-dark">
                        <h3>Activities</h3>
                        <p>Things you can do in this location.</p>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>  
            </div><div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
<!-- Activities Ends -->
<br><br>
<!-- Foods Starts -->
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-dark">
                        <h3>Foods</h3>
                        <p>Delicious foods you must try on this place.</p>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
                    <div class="card bg-dark">
                        <img src="images/img-1.jpg" class="card-img pe-auto" alt="...">
                        <div class="card-img-overlay d-flex justify-content-around align-items-end">
                            <h2 class="card-title text-white">Card title</h2>
                            <h4 class="card-text iconCard"><i class="bi bi-arrow-right-circle"></i>
                            </h4>
                        </div>
                    </div>
                </a>  
            </div><div class="col-lg-3 col-md-6 col-sm-12">
                <a href="#" class="text-white">
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
<!-- Foods Ends -->
</div>


    <br><br>
    <!-- Footer starts here -->
    <?php
    require 'php/footer.php'
    ?>
    <!-- Footer Ends here -->
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_nav.php' ?>
    <?php include 'partials/_dbconnection.php' ?>
    <!-- Slide Bar Start -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/2400x700/?coding,python" alt="..." class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2400x700/?coding,javascript" class="d-block w-100"
                    alt="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2400x700/?coding,programming" class="d-block w-100"
                    alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Slide Bar End -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Category - iForm</h1>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM `category`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo '
                <div class="col-md-3">
            <div class="card my-2" style="width: 18rem;">
                    <img src="https://source.unsplash.com/random/400x300/?coding,programming" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">'. $row['category_name'].'</h5>
                        <p class="card-text">'. $row['category_description'].'</p>
                        <a href="http://localhost/projects/iform_web/details.php?category_id='.$row['category_id'].'" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>';
            }
            ?>
        </div>
    </div>
    <?php include 'partials/_footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
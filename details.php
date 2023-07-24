<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_nav.php'; ?>
    <?php include 'partials/_dbconnection.php'; ?>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/2400x700/?coding,python" alt="..."
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2400x700/?coding,javascript" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2400x700/?coding,programming" class="d-block w-100"
                    alt="...">
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
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <?php
                if (isset($_GET['category_id'])) {
                    $id = $_GET['category_id'];
                    $sql = "SELECT * FROM `category` where category_id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                    <div class="jumbotron">
                        <h1 class="display-4">' . $row['category_name'] . '</h1>
                        <p class="lead">' . $row['category_description'] . '</p>
                        <hr class="my-4">
                        <p>' . $row['category_date'] . '</p>
                        <p>' . $row['category_description'] . '</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                if (isset($_GET['category_id'])) {
                    $id = $_GET['category_id'];
                    $sql = "SELECT * FROM `thread` where thread_cat_id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                <ul class="list-unstyled">
                    <li class="media my-2">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">' . $row['thread_title'] . '</h5>
                            <p>' . $row['thread_des'] . '</p>
                            <p>' . $row['thread_date'] . '</p>
                        </div>
                    </li>
                </ul>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php include 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

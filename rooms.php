<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Gabary Hotel Rooms</title>
    <?php require('inc/links.php'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.05);
            transition: all 0.5s;
        }
    </style>

</head>

<body class="bg-light">

<?php
require('inc/header.php');
$query = selectAll('rooms');
$rooms = [];
while ($row = mysqli_fetch_assoc($query)) {
    $rooms[] = $row;
}
?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> Our Rooms</h2>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2"
                         id="filterDropdown">
                        <form action="check_availability.php" method="POST">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:20px">Check Availability</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3" name="checkin" required>
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none mb-3" name="checkout" required>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:20px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label" style="font-size:17px;">Adults</label>
                                        <input type="number" class="form-control shadow-none" name="adults" min="1" required>
                                    </div>
                                    <div>
                                        <label class="form-label" style="font-size:17px;">Kids</label>
                                        <input type="number" class="form-control shadow-none" name="children" min="0">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn text-white custom-bg mt-3 shadow-none w-100">Check Availability</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-lg-9 col-md-12 px-4">
            <?php foreach ($rooms as $room) { ?>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="<?php echo filterationData($room['image']); ?>" class="img-fluid rounded"
                                 alt="<?php echo filterationData($room['name']); ?>">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5><?php echo filterationData($room['name']); ?></h5>
                            <div class="features mb-3">
                                <h6 class="mb-3">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            </div>
                            <div class="features mb-4">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Hot water</span>
                            </div>
                            <div class="features mb-4">
                                <h6 class="mb-2">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <span>Adult <?php echo filterationData($room['adult']); ?></span>
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <span>Child <?php echo filterationData($room['children']); ?></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">Rs. <?php echo filterationData($room['price']); ?> Per Night</h6>
                            <a href="booking.php?room_id=<?php echo $room['id']; ?>"
                               class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require('inc/footer.php'); ?>

</body>

</html>

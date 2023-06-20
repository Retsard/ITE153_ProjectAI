<?php
require 'conn.php';


if (filter_has_var(INPUT_GET, 'foodName')) {
    $food_name = htmlspecialchars($_GET['foodName']);
}

$foodQuery = "SELECT * FROM food WHERE food_name = :foodName";

$foodStatement = $pdo->prepare($foodQuery);
$foodStatement->bindParam(":foodName", $food_name);
$foodStatement->execute();

if ($foodStatement->rowCount() === 1) {
    $food = $foodStatement->fetch(PDO::FETCH_ASSOC);
    $food_id = filter_var($food['food_id'], FILTER_SANITIZE_NUMBER_INT);

    $food_name = htmlspecialchars($food['food_name']);
    $clean_food_calories = filter_var($food['food_calories'], FILTER_SANITIZE_NUMBER_INT);
    $food_calories = filter_var($clean_food_calories, FILTER_VALIDATE_INT);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NutriSnap</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/styles.css">

    </head>
    <body>

<!-- ======= Why Us Section ======= -->
        <section id="rider" class="rider section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row justify-content-center">

                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1  d-sm-flex align-items-sm-center justify-content-sm-center">

                        <div class="content">
                            <h3><strong>Scan Results</strong></h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a class="collapse"> Food's Information <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-down icon-close"></i></a>
                                    <div class="collapse show d-flex flex-column">
                                    
                                        <p> Food Name: <?php echo $food_name ?></p>
                                        <p>Calories per 100 grams: <?php echo $food_calories ?></p>

                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
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

    $food_name = htmlspecialchars($food['food_name']);
    $clean_food_calories = filter_var($food['food_calories'], FILTER_SANITIZE_NUMBER_INT);
    $food_calories = filter_var($clean_food_calories, FILTER_VALIDATE_INT);
}

?>

<!-- ======= Why Us Section ======= -->
<section id="rider" class="rider section-bg">
    <div class="container-fluid" data-aos="fade-up">

        <div class="row justify-content-center">

            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1  d-sm-flex align-items-sm-center justify-content-sm-center">

                <div class="content">
                    <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                            <a class="collapse"><span><?php echo $rider_no ?></span> Food's Information <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-down icon-close"></i></a>
                            <div class="collapse show d-flex flex-column">
                                <?php if ($img_url && file_exists("../assets/img/rider/$img_url")) : ?>
                                    <div class="pic align-self-center"><img src="../assets/img/rider/<?php echo $img_url ?>" class="img-fluid" alt=""></div>
                                <?php else : ?>
                                    <div class="pic"><img src="../assets/img/default-img.svg ?>" class="img-fluid" alt=""></div>
                                <?php endif; ?>


                                <p> Food Name: <?php echo $food_name ?></p>
                                <p>Calories per 100 grams: <?php echo $food_calories ?></p>
                                
                                <?php if ($official_reciept) : ?>
                                    <p>Official Receipt: <?php echo $official_reciept ?></p>
                                <?php endif ?>

                                <?php if ($or_expiration_date) : ?>
                                    <p>Official Receipt Expiration: <?php echo $or_expiration_date ?></p>
                                <?php endif ?>

                                <?php if ($certificate_of_registration) : ?>
                                    <p>Certificate of Registration: <?php echo $certificate_of_registration ?></p>
                                <?php endif ?>

                                <?php if ($licenseNumber) : ?>
                                    <p>Driver's License: <?php echo $licenseNumber ?></p>
                                <?php endif ?>

                                <?php if ($license_expiration_date) : ?>
                                    <p>Driver's License Expiration: <?php echo $license_expiration_date ?></p>
                                <?php endif ?>

                                <?php if ($contact_number) : ?>
                                    <p>Contact Number: <?php echo $contact_number ?></p>
                                <?php endif; ?>
                                <p>Status: <?php echo $status ?></p>

                            </div>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="col-lg-5 align-items-center order-1 order-lg-2 img" style='background-image: url("./../assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

    </div>
</section><!-- End Why Us Section -->

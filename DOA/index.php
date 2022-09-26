<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOA</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->
<?php @include('Header.php') ?>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Keep Your <span>Land</span> Safe and Secure</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- Services section starts  -->

    <section class="Services" id="Services">

        <h1 class="heading" style="margin-top:70px;"> our <span>Services</span> </h1>

        <div class="box-container">
        <?php
                $sql = "SELECT * FROM `services` ORDER by rand() LIMIT 24";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) { 
                            echo ' <div class="box">';
                            echo '<img src="image/feature-img-1.png" alt="">';
                            echo'<h3></div></h3>';
                            echo '<p>'.$row['Sofficer'].'</p>';
                            echo'<button class="btn" onclick="loadService(' . $row['SID'] . ')">read more</button>';
                            echo '</div>';
                        }
                    } else {
                        echo "No Services found";
                    }
                } else {
                    echo "Services not found";
                }

                ?>
                
            </div>

    </section>

    <!-- Services section ends -->

    <section class="home2" id="home">

        <div class="content">
            <h3>Healthy <span>ECO</span> Farming Culture</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
            <a href="#" class="btn">Enroll Now</a>
        </div>

    </section>



    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                

            </div>

        </div>

    </section>

    <!-- review section ends -->

    

    <!-- footer section ends -->















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
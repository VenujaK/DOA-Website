<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/Services.css">

</head>

<body>
<?php @include('Header.php') ;
@include('config.php');
?>

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
                            echo'<h3>'.$row['sname'].'</h3>';
                            echo '<p>'.$row['Sofficer'].'</p>';
                            echo'<button class="btn" onclick="loadService(' . $row['SID'] . ')">read more</button>';
                        }}}
                            ?>
               

        </div>

    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script>
    ServiceID = $ServiceID;
    // to transfer the product id via url
    function loadService(ServiceID) {
        // console.log(productID);
        var origin = window.location.origin;
        window.location.href = origin + "/DOA/ServiceInfo.php?service_id=" + ServiceID;

        // console.log(origin);

    }
</script>
</body>
</html>
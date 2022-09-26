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
    <style>
        ol{
            position: fixed;
            left: 43%;
            top: 35%;
        }
    </style>
</head>

<body>
    <?php 
        @include('Header.php');
    ?>
    <ol style="list-style: none; " align="center">
        <li><button class="btn" onclick="queries()"> Queries and Enrolls</button></li><br>
        <li><button class="btn" onclick="service()"> Service Upload</button></li>
    </ol>
</body>
<script>
    function queries(){
        window.open('QueryandEnrolls.php').self;
    }
    function service(){
        window.open('Service_Upload.php').self;
    }
</script>

</html>
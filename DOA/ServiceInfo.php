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
    <link rel="stylesheet" href="./css/ServiceInfo.css">
</head>

<body>
    <?php @include('./Header.php');
    $service_id = $_GET['service_id'];
     @include('config.php');
      if (isset($_POST['enroll'])) {
         $Name = $_POST['Name'];
         $Contact = $_POST['Contact'];
         $City = $_POST['City'];

         if(empty($Name) || empty($Contact) || empty($City) ){
            echo "<script>alert('fil all Information')</script>";
         }else{
            $sql = "INSERT INTO enroll ( Name, Contact ,City)
            VALUES ('$Name','$Contact','$City');";
           
            if (mysqli_query($conn, $sql)) {
               echo "<script>alert('Successfull')</script>";
           } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         }
      }
      if (isset($_POST['submitq'])) {
        $Text = $_POST['text'];
        if(empty($Text) ){
           echo "<script>alert('fil all Information')</script>";
        }else{
           $sql = "INSERT INTO queries (QText)
           VALUES ('$Text');";
          
           if (mysqli_query($conn, $sql)) {
              echo "<script>alert('Successfull')</script>";
          } else {
           echo "<script>alert('Unsuccessfull')</script>";
          };
        }
     }
    ?>
    <div class="about-section">
        <div class="register">
            <form action="" class="form1" method="post">
                <ol style="list-style: none;">
                    <li>
                        <h1>Enroll Now</h1>
                    </li>
                    <li><label for=" ">Name :</label></li>
                    <li><input type="text" name="Name"></li>
                    <li><label for=" ">Contact No :</label></li>
                    <li><input type="text" name="Contact"></li>
                    <li><label for=" ">City :</label></li>
                    <li><input type="text" name="City"></li>
                    <li><button class="btn" style="background-color: #21b90d;color: white;" name="enroll">Enroll</button></li>
                </ol>
            </form>
        </div>
        <?php

        $sql = "SELECT * FROM services WHERE SID=$service_id";
        $sqlResult = mysqli_query($conn, $sql);
        if (mysqli_num_rows($sqlResult)) {
            $productInfo = mysqli_fetch_assoc($sqlResult);
        } else {
            echo "0 results";
        }
        ?>
        <div class="inner-container ">
            <h1><?php echo $productInfo['sname'] ?></h1>
            <p class="text ">
            <?php echo $productInfo['SDes'] ?>
            </p>
            <form action="" class="form" method="post">
            <ol style="list-style: none;">
                <li>
                    <h1>Queries</h1>
                </li>
                <li><input type="textarea" class="qtext" name="text"></li>
                <li><button class="btn" name="submitq">Submit</button></li>
            </ol>
            </form>
        </div>
    </div>
</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</html>
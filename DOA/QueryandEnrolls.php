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
        .tblservice {
    width: 60%;
    justify-content: center;
    border: green 4px solid;
    border-radius: 12px;
}

.tblservice th {
    background-color: rgb(4, 141, 9);
    font-size: 120%;
    font-weight: 700;
    height: 50px;
}

.tblservice td {
    font-size: 120%;
    font-weight: 700;
    margin-top: 80px;
    background-color: rgb(255, 255, 255);
}
.service{
    margin-top: 100px;
    margin-bottom: 100px;
}
    </style>
</head>

<body>
    <?php 
        @include('Header.php');
    ?>
     <?php  
      $select = mysqli_query($conn, "SELECT * FROM queries");
      ?>
    <div class="service" align="center">
         <table class="tblservice" align="center">
            <form method="POST">
            <thead>
               <tr>
                  <th>QID</th>
                  <th>Query</th>       
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td align="center"><?php echo $row['QID']; ?></td>
                  <td align="center"><?php echo $row['QText']; ?></td>           
               </tr>
            <?php } ?>
         </table>
         </form>
      </div>

      <?php  
      $select = mysqli_query($conn, "SELECT * FROM enroll");
      ?>
    <div class="service" align="center">
         <table class="tblservice" align="center">
            <form method="POST">
            <thead>
               <tr>
                  <th>EID</th>
                  <th>Name</th>       
                  <th>Contact</th>       
                  <th>City</th>       
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td align="center"><?php echo $row['EID']; ?></td>
                  <td align="center"><?php echo $row['Name']; ?></td>           
                  <td align="center"><?php echo $row['Contact']; ?></td>           
                  <td align="center"><?php echo $row['City']; ?></td>           
               </tr>
            <?php } ?>
         </table>
         </form>
      </div>

</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link rel="stylesheet" href="./css/admin.css" />
  </head>
  <body>
  <?php @include('config.php');
      if (isset($_POST['insert'])) {
         $id = $_POST['id'];
         $Name = $_POST['Name'];
         $Officer = $_POST['Officer'];
         $Description = $_POST['Description'];

         if(empty($id) || empty($Name) || empty($Officer) || empty($Description)){
            echo "<script>alert('fil all Information')</script>";
         }else{
            $sql = "INSERT INTO services (SID, sname, Sofficer, SDes)
            VALUES ('$id','$Name','$Officer','$Description');";
           
            if (mysqli_query($conn, $sql)) {
               echo "<script>alert('Successfull')</script>";
           } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         }
      }
      
      if(isset($_POST['update'])){
        $id = $_POST['id'];
         $Name = $_POST['Name'];
         $Officer = $_POST['Officer'];
         $Description = $_POST['Description'];
         if(empty($id)){
            echo "<script>alert('Please Provide the ID')</script>";
         }else{
            $sql = "UPDATE services SET sname='$Name', Sofficer='$Officer', SDes='$Description'  WHERE SID = '$id'";
            if (mysqli_query($conn, $sql)) {
               echo "<script>alert('Successfull')</script>";
           } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         }
      }
      if (isset($_POST['delete'])) {
         $id = $_POST['id'];
         if(mysqli_query($conn, "DELETE FROM services  WHERE SID = $id")){
            echo "<script>alert('Successfull')</script>";
         } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         

      }
  ?>
  <form action="" method="POST">
    <div class="container">
      <h2>Services</h2>
      <hr />
      <br />
      <div class="form">
        Service id: <input type="text" name="id" id="id" /> <br /><br />
        Name:&nbsp; <input type="text" name="Name" id="Name" /> <br /><br />
        Officer: <input type="text" name="Officer" id="Officer" /> <br /><br />
        Description: <input type="textA" name="Description" id="Description" /> <br /><br />
      </div>

      <div class="buttons">
        <button id="insert" name="insert">Insert</button>
        
        <button id="update" name="update">Update</button>
        <button id="delete" name="delete">Delete</button>
      </div>
    </div>
    </form>
    <?php  
      $select = mysqli_query($conn, "SELECT * FROM services");
      ?>
    <div class="service">
         <table class="tblservice" align="center">
            <form method="POST">
            <thead>
               <tr>
                  <th>SID</th>
                  <th>Name</th>
                  <th>Officer</th>
                  
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td align="center"><?php echo $row['SID']; ?></td>
                  <td align="center"><?php echo $row['sname']; ?></td>
                  <td align="center"><?php echo $row['Sofficer']; ?></td>
                  
               </tr>
            <?php } ?>
         </table>
         </form>
      </div>

   </div>
    
  </body>
</html>
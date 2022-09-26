
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Officer Registration</title>
    <link rel="stylesheet" href="./css/admin.css" />
  </head>
  <body>
  <?php @include('config.php');
      if (isset($_POST['insert'])) {
         $id = $_POST['id'];
         $Username = $_POST['Username'];
         $Contact = $_POST['Contact'];
         $Password = $_POST['Password'];

         if(empty($id) || empty($Username) || empty($Contact) || empty($Password)){
            echo "<script>alert('fil all Information')</script>";
         }else{
            $sql = "INSERT INTO officers (FID, Fusname, Fcontact, Fpsword)
            VALUES ('$id','$Username','$Contact','$Password');";
           
            if (mysqli_query($conn, $sql)) {
               echo "<script>alert('Successfull')</script>";
           } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         }
      }
      if(isset($_POST['read'])){
         $id = $_POST['id'];
         if(empty($id)){
            echo "<script>alert('Please Provide the ID')</script>";
         }else{
            $sql = "SELECT * FROM officers WHERE FID=$id;";
           
            if (mysqli_query($conn, $sql)) {
               
           } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         }
      }
      if(isset($_POST['update'])){
         $id = $_POST['id'];
         $Username = $_POST['Username'];
         $Contact = $_POST['Contact'];
         $Password = $_POST['Password'];
         if(empty($id)){
            echo "<script>alert('Please Provide the ID')</script>";
         }else{
            $sql = "UPDATE officers SET Fusname='$Username', Fcontact='$Contact', Fpsword='$Password'  WHERE FID = '$id'";
            if (mysqli_query($conn, $sql)) {
               echo "<script>alert('Successfull')</script>";
           } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         }
      }
      if (isset($_POST['delete'])) {
         $id = $_POST['id'];
         if(mysqli_query($conn, "DELETE FROM officers  WHERE FID = $id")){
            echo "<script>alert('Successfull')</script>";
         } else {
            echo "<script>alert('Unsuccessfull')</script>";
           };
         

      }
  ?>
  <form action="" method="POST">
    <div class="container">
      <h2>Officer Registration</h2>
      <hr />
      <br />
      <div class="form">
        Officer id: <input type="text" name="id" id="id" /> <br /><br />
        Username:&nbsp; <input type="text" name="Username" id="Username" /> <br /><br />
        Contact: <input type="text" name="Contact" id="Contact" /> <br /><br />
        Password: <input type="text" name="Password" id="Password" /> <br /><br />
      </div>

      <div class="buttons">
        <button id="insert" name="insert">Insert</button>
        <button id="update" name="update">Update</button>
        <button id="delete" name="delete">Delete</button>
      </div>
    </div>
    </form>
    <?php  
      $select = mysqli_query($conn, "SELECT * FROM officers");
      ?>
    <div class="service">
         <table class="tblservice" align="center">
            <form method="POST">
            <thead>
               <tr>
                  <th>FID</th>
                  <th>Username</th>
                  <th>Contact</th>
                  
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td align="center"><?php echo $row['FID']; ?></td>
                  <td align="center"><?php echo $row['Fusname']; ?></td>
                  <td align="center"><?php echo $row['Fcontact']; ?></td>
                  
               </tr>
            <?php } ?>
         </table>
         </form>
      </div>

   </div>
   
    
  </body>
</html>
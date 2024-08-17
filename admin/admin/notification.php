<?php 
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Admin') {
       include "../DB_connection.php";
       include "data/setting.php";
       $setting = getSetting($conn);
 ?>
 <?php 
    if (isset($_POST['notification_btn'])) {

      $notification_title  = $_POST['notification_title'];
	    $notification_deatil = $_POST['notification_deatil'];
	    $notification_for = $_POST['notification_for'];



      

      $sql = "INSERT INTO notification ( title, detail, notification_for) VALUES ('$notification_title','$notification_deatil','$notification_for')";   
      // die($sql);
      $stmt = mysqli_query($connn , $sql);
      if ($stmt){
        echo "Notification Sent";
      }
      else {
        echo "Notification failed";
      }



    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin - Notification</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

     <div class="container-fluid">
      <div class="row">
        <div class="col-2">
        <?php 
        include "inc/sidebar.php";
    ?>
        </div>
        <div class="col-10">
        <form action="" method="post" class="shadow p-3 mt-5 form-w" style="margin: 0 auto">
    <div class="mb-3">
		    <label class="form-label" style="font-weight: bold;">Notification to:</label>
		    <select class="form-control"
		            name="notification_for">
		    	<option value="Website">Website</option>
		    	<option value="Teacher">Teacher</option>
		    	<option value="Student">Student</option>
		    	<option value="Registrar">Registrar Office</option>
		    </select>
		  </div>
        
        <div class="mb-3">
            <label class="form-label">Title</label>
                <input type="text" 
                class="form-control"
                name="notification_title">
        </div>
        <div class="mb-3">
            <label class="form-label">Detail</label>
                <input type="text" 
                class="form-control"
                name="notification_deatil">
        </div>
        <div class="mb-3 text-center">
        <button  type="submit" 
              class="btn btn-primary" name="notification_btn" value="save">
              Upload</button>
        </div>
        
    </form>
        </div>
      </div>
     </div>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(11) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
	header("Location: ../login.php");
	exit;
} 

?>
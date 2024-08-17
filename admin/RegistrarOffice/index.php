<?php 
session_start();
if (isset($_SESSION['r_user_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Registrar Office') {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Office - Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
      <div class="conatiner-fluid">
        <div class="row">
          <div class="col-2">
            <?php
            include "inc/sidebar.php";
            ?>
          </div>
          <div class="col-10">
          <div class="t_nav">
              <div class="nav_text">Registrar - Portal</div>
              <div class="nav_name">
              <button onclick="myNotification()"><i class='bx bxs-bell'></i></button>
              <h5><?=$_SESSION['fullName']?></h5>
              </div>
            </div>
          <div class="container mt-5">
         <div class="container text-center">
             <div class="row row-cols-5">
               <a href="student-add.php" 
                  class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user-plus fs-1" aria-hidden="true"></i><br>
                  Register Student
               </a> 

               <a href="student.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user fs-1" aria-hidden="true"></i><br>
                  All Students 
               </a> 
               
               <a href="../logout.php" class="col btn btn-warning m-2 py-3 col-5">
                 <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                  Logout
               </a> 
             </div>
         </div>
     </div>
          </div>
        </div>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });
        
        function myNotification()
        {
          $.ajax({
            url :'../show-notification.php',
            method:'post',
            data:{'notification_for':'Registrar'},
            success:function(data)
            {
              // $('.result').html(data)
              // swal("Title!", "Detail:Good luck Putar G!", "success")
              Swal.fire({
              title: "<strong>Notifications!</strong>",
              icon: "info",
              html: data,
              showCloseButton: true,
              showCancelButton: true,
              focusConfirm: false,
              confirmButtonText: `
              <i class="fa fa-thumbs-up"></i> Great!
              `,
              confirmButtonAriaLabel: "Thumbs up, great!",
              cancelButtonText: `
              <i class="fa fa-thumbs-down"></i>
              `,
              cancelButtonAriaLabel: "Thumbs down"
              });
            }
          })
        }
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

<style>
   .t_nav {
    background: #fff;
    height: 50px;
    width: 100%;
    top: 0;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   }
   .nav_text {
    font-size: 20px;
    font-weight: 600;
   }
   .nav_name {
    display: flex;
   
   }
   .nav_name button {
    margin-right: 20px;
    border: none;
    background: none;
    color: red;
    font-size: 20px;
   }
   .nav_name h3 {
    font-size: 18px;
    font-weight: 500;
    padding: 0 10px 0 20px;
    margin-right: 30px;

   }

</style>
<?php 
session_start();
if (isset($_SESSION['teacher_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Teacher') {
       include "../DB_connection.php";
       include "data/teacher.php";
       include "data/subject.php";
       include "data/grade.php";
       include "data/section.php";
       include "data/class.php";


       $teacher_id = $_SESSION['teacher_id'];
       $teacher = getTeacherById($teacher_id, $conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teacher - Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <?php 
        // include "inc/navbar.php";

        if ($teacher != 0) {
     ?>
      <div class="container-fluid">
      <div class="row">
        <div class="col-2">
        <?php 
        include "inc/sidebar.php";
     ?>
        </div>
        <div class="col-10">
        <div class="t_nav">
              <div class="nav_text">Teacher - Portal</div>
              <div class="nav_name">
                <button onclick="myNotification()"><i class='bx bxs-bell'></i></button>
                <h5><?=$_SESSION['fullName']?></h5>
              </div>
            </div>
        <div class="container mt-5">
         <div class="card" style="width: 22rem;">
          <img src="../img/teacher-<?=$teacher['gender']?>.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">@<?=$teacher['username']?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">First name: <?=$teacher['fname']?></li>
            <li class="list-group-item">Last name: <?=$teacher['lname']?></li>
            <li class="list-group-item">Username: <?=$teacher['username']?></li>

            <li class="list-group-item">Employee number: <?=$teacher['employee_number']?></li>
            <li class="list-group-item">Address: <?=$teacher['address']?></li>
            <li class="list-group-item">Date of birth: <?=$teacher['date_of_birth']?></li>
            <li class="list-group-item">Phone number: <?=$teacher['phone_number']?></li>
            <li class="list-group-item">Qualification: <?=$teacher['qualification']?></li>
            <li class="list-group-item">Email address: <?=$teacher['email_address']?></li>
            <li class="list-group-item">Gender: <?=$teacher['gender']?></li>
            <li class="list-group-item">Date of joined: <?=$teacher['date_of_joined']?></li>

            <li class="list-group-item">Subject: 
                <?php 
                   $s = '';
                   $subjects = str_split(trim($teacher['subjects']));
                   foreach ($subjects as $subject) {
                      $s_temp = getSubjectById($subject, $conn);
                      if ($s_temp != 0) 
                        $s .=$s_temp['subject_code'].', ';
                   }
                   echo $s;
                ?>
            </li>
            <li class="list-group-item">Class: 
                  <?php 
                     $c = '';
                     $classes = str_split(trim($teacher['class']));

                     foreach ($classes as $class_id) {
                         $class = getClassById($class_id, $conn);

                        $c_temp = getGradeById($class['grade'], $conn);
                        $section = getSectioById($class['section'], $conn);
                        if ($c_temp != 0) 
                          $c .=$c_temp['grade_code'].'-'.
                               $c_temp['grade'].$section['section'].', ';
                     }
                     echo $c;

                  ?>
            </li>
            
          </ul>
        </div>
     </div>
        </div>
      </div>
     </div>

     <?php 
        }else {
          header("Location: logout.php?error=An error occurred");
          exit;
        }
     ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
   <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });

        // function myNotification() {
        //   swal("Title!", "Detail:Good luck Putar G!", "success")  
        // }
        function myNotification()
        {
          $.ajax({
            url :'../show-notification.php',
            method:'post',
            data:{'notification_for':'Teacher'},
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
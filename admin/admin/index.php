<?php
session_start();
if (
  isset($_SESSION['admin_id']) &&
  isset($_SESSION['role'])
) {

  if ($_SESSION['role'] == 'Admin') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Home</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style./css">
      <link rel="icon" href="../logo.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
      <?php
      // include "inc/navbar.php";
      ?>


      <div class="conatiner-fluid">
        <div class="row">
          <div class="col-2">
            <?php
            include "inc/sidebar.php";
            ?>
          </div>
          <div class="col-10">
            <div class="t_nav">
              <div class="nav_text">Admin - Portal</div>
              <div class="nav_name"><h5><?=$_SESSION['fullName']?></h5></div>
            </div>

            <div class="container mt-5">
            <!-- <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Schools</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>School</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div> -->

              <div class="row row-cols-9">
                <a href="teacher.php"
                  class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  Teachers
                </a>
                <a href="student.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                  Students
                </a>
                <a href="registrar-office.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-pencil-square fs-1" aria-hidden="true"></i><br>
                  Registrar Office
                </a>
                <a href="class.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                  Class
                </a>
                <a href="section.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-columns fs-1" aria-hidden="true"></i><br>
                  Section
                </a>
                <a href="grade.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-level-up fs-1" aria-hidden="true"></i><br>
                  Grade
                </a>
                <a href="course.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                  Course
                </a>
                <a href="message.php" class="col btn btn-dark m-2 py-3">
                  <i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                  Message
                </a>
                <a href="settings.php" class="col btn btn-primary m-2 py-3 col-5">
                  <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                  Settings
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



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#navLinks li:nth-child(1) a").addClass('active');
        });
      </script>

    </body>

    </html>
<?php

  } else {
    header("Location: ../login.php");
    exit;
  }
} else {
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
    border-left: 3px solid grey;
    font-size: 18px;
    font-weight: 500;
    padding: 0 10px 0 20px;
    margin-right: 30px;
   }

   .container .content {
    position: relative;
    margin-top: 10vh;
    min-height: 90vh;
    background: #f1f1f1;
}
.container .content .cards {
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.contai
ner .content .cards .card {
    width: 250px;
    height: 150px;
    background: white;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .content .content-2 {
    min-height: 60vh;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}
.container .content .content-2 .recent-payments {
    min-height: 50vh;
    flex: 5;
    background: white;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}
.container .content .content-2 .new-students {
    flex: 2;
    background: white;
    min-height: 50vh;
    margin: 0 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}
.container .content .content-2 .new-students table td:nth-child(1) img {
    height: 40px;
    width: 40px;
}


</style>
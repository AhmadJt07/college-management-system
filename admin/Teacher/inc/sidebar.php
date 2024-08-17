<nav class="sidebar">
        <header>
            <div class="image_text">
                <span class="image">
                <img src="../img/logo.png" alt="logo">
                </span>

                <div class="text header_text">
                    <span class="name"></span>
                </div>
            </div>
        </header>
        <div class="menu_bar">
            <div class="menu">
                <ul class="menu-link" id="navLinks">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-home icon' ></i>
                            <span class="text nav_text">DashBoard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="classes.php">
                        <i class="fa fa-cubes icon" aria-hidden="true"></i>
                            <span class="text nav_text">Classes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="students.php">
                        <i class="fa fa-graduation-cap icon" aria-hidden="true"></i>
                            <span class="text nav_text">Students</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="student-grade.php">
                        <i class="fa fa-level-up icon" aria-hidden="true"></i>
                            <span class="text nav_text">Students Grade</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="pass.php">
                        <i class="fa fa-cogs icon" aria-hidden="true"></i><br>
                            <span class="text nav_text">Settings</span>
                        </a>
                    </li>
                    
                    <li class="nav-link" style="border: 2px solid white; border-radius:6px" >
                        <a href="../logout.php">
                        <i class="fa fa-sign-out icon" aria-hidden="true"></i>
                            <span class="text nav_text">LogOut</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

















<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    font-family: Poppins, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root {
    /* =======TRANSITIONS======= */
    --trans-02: all 0.2s ease;
    --trans-03: all 0.3s ease;
    --trans-04: all 0.4s ease;
    --trans-05: all 0.5s ease;
}
body {
    height: 100vh;
   background: #e9ecef;
}
nav {
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    height: 100%;
    padding: 0px 5px;
    background: #343a40;
}
.sidebar .image_text img {
    width: 100%;
    border-radius: 6px;
    } 
.sidebar .image_text {
    display: flex;
    align-items: center;
}
.sidebar .nav_text {
    font-size: 16px;
}
.sidebar li {
    height: 40px;
    margin-top: 10px;
    list-style: none;
    display: flex;
    align-items: center;
}
.sidebar li .icon{
    display: flex;
    justify-content: center;
    align-items: center;
    min-width: 50px;
    font-size: 18px;  
}
.sidebar li .icon,
.sidebar li .text {
    color: #ffffff;
    transition: var(--trans-03);
}
.sidebar li a {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 6px;
    transition: var(--trans-04);
}
.sidebar li a:hover {
    background: #212529;
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text {
    color: #ffffff;
}
.menu-link {
    padding-left: 0px;
}
</style>
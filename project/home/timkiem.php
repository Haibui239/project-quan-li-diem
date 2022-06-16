<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
$_SESSION['user_id'] = true;

if(!isset($user_id)){
   header('location:index.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login/logout.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="style2.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="logo-web.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f56b86e186.js" crossorigin="anonymous"></script>
</head>
<body class="preloading">
    <div class="loading">
        <img src="./giphy.gif" alt="">
    </div>
    <div class="wrapper flex-center">
        <div class="container">
            <div class="menu-top width-max flex-wrap">
                <div class="menu-top-logo">
                    <div class="menu-top-logo-box center-row">
                        <img src="logo.jpeg" alt="" class="width-max">
                    </div>
                </div>
                <div class="menu-top-content flex-wrap">
                    <div class="menu-top-content-icon flex-center">
                        <i class="fa-regular fa-bell"></i>
                        <i class="fa-regular fa-message"></i>
                    </div>
                    <div class="menu-top-content-user flex-around">
                        <?php
                            $sql = "SELECT id,username FROM users";
                            $result = $conn->query($sql);
                        ?>
                       <?php while($row = $result->fetch_assoc()) {
                                echo "<p>".$row["username"]."</p>"; }?>
                        <button id="btn" class="menu-top-user-option"><i class="fa-solid fa-chevron-down"></i></button>
                            <div class="menu-top-user p-absolute" id = "list">
                            <ul>
                                    <li>
                                        <i class="fa-solid fa-gear"></i>
                                        <a href="#">Setting</a></li>
                                    <li>
                                        <i class="fa-solid fa-user"></i>
                                        <a href="profile/index.php">Profile</a></li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <a href="mailto:<?php
                                                $sql = "SELECT id,email FROM users";
                                                $result = $conn->query($sql);
                                            ?>
                                            <?php while($row = $result->fetch_assoc()) {
                                                    echo $row["email"]; }
                                        ?>?subject=subject text">Message</a></li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                        <a href="../login/login.php" class="delete-btn">Log Out</a>
                                </ul>
                            </div>
                        </i>
                    </div>
                </div>
            </div>
            <div class="menu-top-res-tab shadow">
                <div class="menu-top-res-icon">
                    <div class="menu-top-res-icon-line"></div>
                    <div class="menu-top-res-icon-line"></div>
                    <div class="menu-top-res-icon-line"></div>
                </div>
            </div>
            <div class="menu-left flex-center">
                <div class="menu-left-list">
                    <ul>
                        <li>
                            <i class="fa-solid fa-house"></i>
                            <a href="./index.php">Trang Chủ</a></li>
                        <li>
                            <i class="fa-solid fa-wrench"></i>
                            <a href="./capnhat.php">Cập Nhật</a></li>
                        <li>
                            
                            <a href="./timkiem.php"><i class="fa-solid fa-magnifying-glass"></i>Tìm Kiếm</a></li>
                        <li>
                            <i class="fa-solid fa-address-book"></i>
                            <a href="./thongke.php">Thống Kê</a></li>
                    </ul>
                </div>
            </div>
            <div class="main flex-wrap">
                <div class="main-container flex-wrap">
                    <div class="main-container-box flex-center shadow">
                        <a href="../search/sinhvien.php" class="main-container-box-text"><p>Sinh Viên</p></a>
                        <div class="layer">
                            <a href="../search/sinhvien.php">
                            <i class="fa-solid fa-graduation-cap"></i>
                            </a>
                        </div>   
                    </div>
                    <div class="main-container-box flex-center shadow">
                        <a href="../search/giaovien.php" class="main-container-box-text"><p>Giáo viên</p></a>
                        <div class="layer">
                        <a href="../search/giaovien.php">
                            <i class="fa-solid fa-person-chalkboard"></i>
                        </a>
                        </div>
                    </div>
                    <div class="main-container-box flex-center shadow">
                        <a href="../search/monhoc.php" class="main-container-box-text"><p>Môn học</p></a>
                        <div class="layer">
                            <a href="../search/monhoc.php">
                                <i class="fa-solid fa-book"></i></a>
                        </div>
                    </div>
                    <div class="main-container-box flex-center shadow">
                        <a href="../search/ketqua.php" class="main-container-box-text"><p>Kết quả</p></a>
                        <div class="layer">
                            <a href="../search/ketqua.php">
                                <i class="fa-solid fa-square-poll-horizontal"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-info shadow">
                    <div class="main-avt width-max">
                        <img src="avt.jpeg" alt="" class="width-max">
                    </div>
                    <div class="main-information width-max">
                        <div class="main-info-text center-row"><p>Information</p></div>
                        <div class="email-phone center-row">
                            <div class="email">
                                <span>Email</span>
                                <p><?php
                            $sql = "SELECT id,email FROM users";
                            $result = $conn->query($sql);
                        ?>
                       <?php while($row = $result->fetch_assoc()) {
                                echo "<p>".$row["email"]."</p>"; }?></p>
                            </div>
                            <div class="phone">
                                <span>Phone</span>
                                <p>0968 455 466</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-contact flex-wrap width-max">
                    <div class="main-contact-box flex-wrap p-relative shadow">
                        <div class="main-contact-icon-box flex-center main-icon-contact-first">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="main-contact-info">
                            <span>Email</span>
                            <p><?php
                            $sql = "SELECT id,email FROM users";
                            $result = $conn->query($sql);
                        ?>
                       <?php while($row = $result->fetch_assoc()) {
                                echo "<p>".$row["email"]."</p>"; }?></p>
                        </div>
                        <div class="main-contact-box-hover p-absolute">
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                    </div>
                    <div class="main-contact-box flex-wrap p-relative shadow">
                        <div class="main-contact-icon-box flex-center main-icon-contact-second">
                            <i class="fa-brands fa-twitter-square"></i>
                        </div>
                        <div class="main-contact-info">
                            <span>Twitter</span>
                            <p>@PRr2309</p>
                        </div>  
                        <div class="main-contact-box-hover p-absolute">
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                    </div>
                    <div class="main-contact-box flex-wrap p-relative shadow">
                        <div class="main-contact-icon-box flex-center main-icon-contact-third">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="main-contact-info">
                            <span>Instagram</span>
                            <p>buiviethai_tt</p>
                        </div>
                        <div class="main-contact-box-hover p-absolute">
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="" src="js.js"></script>
</body>
</html>
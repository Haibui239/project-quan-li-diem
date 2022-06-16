<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="icon" type="image/jpeg" href="logo.jpeg">
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
                        <img src="/image/logo.jpeg" alt="" class="width-max">
                    </div>
                </div>
                <div class="menu-top-content flex-wrap">
                    <div class="menu-top-content-icon flex-center">
                        <i class="fa-regular fa-bell"></i>
                        <i class="fa-regular fa-message"></i>
                    </div>
                    <div class="menu-top-content-user flex-center">
                        <img src="/image/avt.jpeg" alt="" class="width-avt-user">
                        <span>Root</span>
                        <button id="btn" class="menu-top-user-option"><i class="fa-solid fa-chevron-down"></i></button>
                            <div class="menu-top-user p-absolute" id = "list">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-gear"></i>
                                        <a href="#">Setting</a></li>
                                    <li>
                                        <i class="fa-solid fa-user"></i>
                                        <a href="#">Profile</a></li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <a href="#">Message</a></li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                        <a href="#">Log out</a></li>
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
                            <a href="./index.html">Trang Chủ</a></li>
                        <li>
                            
                            <a href="./capnhat.html"><i class="fa-solid fa-wrench"></i>Cập Nhật</a></li>
                        <li>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <a href="./timkiem.html">Tìm Kiếm</a></li>
                        <li>
                            <i class="fa-solid fa-address-book"></i>
                            <a href="./thongke.html">Thống Kê</a></li>
                    </ul>
                </div>
            </div>
            <div class="profile">
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="" src="js.js"></script>
</body>
</html>
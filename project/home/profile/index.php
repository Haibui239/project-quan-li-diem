<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="row">
    
<!-- header section starts  -->

<header class="col-md-3 m-2 res">

    <div class="user">
        <img src="avt.png" alt="">
        <?php
                            $sql = "SELECT id,username FROM users";
                            $result = $conn->query($sql);
                        ?>
                       <?php while($row = $result->fetch_assoc()) {
                                echo "<p class='name'>".$row["username"]."</p>"; }?>
        <p class="post">admin</p>
    </div>

    <nav class="navbar">
        
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
        
    </nav>

</header>

<!-- header section ends -->

<!-- content section starts  -->

<div class="container col-md-7 m-2">

    <section class="home" id="home">

        <h3 class="name">Xin chào !  
        <?php
                            $sql = "SELECT id,username FROM users";
                            $result = $conn->query($sql);
                        ?>
                       <?php while($row = $result->fetch_assoc()) {
                                echo "<span>".$row["username"]."</span>"; }?>
    
        </h3>
        <h3 class="post">Quản trị viên gồm <span class="typing-text">Hải Bùi</span></h3>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

    </section>
    <!-- contact section  -->
    <section class="contact" id="contact">

        <h1 class="heading">contact me</h1>

        <div class="row">

            <form action="">
                <input type="text" class="box" placeholder="first name">
                <input type="text" class="box" placeholder="last name">
                <input type="email" class="box" placeholder="your email">
                <input type="text" class="box" placeholder="your project">
                <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
                <input type="submit" value="message" class="btn">
            </form>

            <div class="content">
                <div class="icons">
                    <h3><i class="fas fa-map-marker-alt"></i> address </h3>
                    <p>
                        92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội</p>
                </div>
                <div class="icons">
                    <h3><i class="fas fa-envelope"></i> email </h3>
                    <?php
                            $sql = "SELECT id,email FROM users";
                            $result = $conn->query($sql);
                        ?>
                       <?php while($row = $result->fetch_assoc()) {
                                echo "<p>".$row["email"]."</p>"; }?>
                </div>
                <div class="icons">
                    <h3><i class="fas fa-phone"></i> phone </h3>
                    <p>024.36230209</p>
                </div>
            </div>

        </div>

    </section>

</div>

<!-- content section ends -->

<!-- theme toggler  -->

<div class="theme-toggler col-md-1 m-2">
    <span style="background: linear-gradient(deeppink, purple);"></span>
    <span style="background: linear-gradient(lightgreen, crimson);"></span>
    <span style="background:linear-gradient(blueviolet, deeppink)"></span>
    <span style="background:linear-gradient(coral, blueviolet)"></span>
    <span style="background:linear-gradient(#999, #111)"></span>
</div>


<!-- type.js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

<script>
    var type = new Typed('.typing-text',{
            strings : [  'Hải Bùi', 'Sơn Phạm', 'Hiếu Đinh' ],
            typeSpeed: 120,
            loop:true
        });

        let themeColor = document.querySelectorAll('.theme-toggler span');
        themeColor.forEach(color => color.addEventListener('click', () =>{
            let background = color.style.background;
            document.querySelector('body').style.background = background;
        }));

</script>

</body>
</html>
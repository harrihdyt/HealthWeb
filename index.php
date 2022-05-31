<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halodek- Ucapkan halodek untuk memulai percakapan</title>
    <link rel="shortcut icon" href="assets/halodek-favicon.svg" type="image/x-icon">


    <!-- external css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">


    <!-- external fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="navbar-nav">
        <div class="logo-nav">
            <img id="logodek" src="assets/halodek.svg" alt="halodek" srcset="">
        </div>

        <div class="navbar-item">
            <button class="nav-item">Beranda</button>
            <button class="nav-item">Artikel</button>
            <button class="nav-item">Aplikasi</button>
            <button class="nav-item">Riwayat</button>
        </div>

        <div class="navbar-login">
            <button class="login-item" onclick="openForm()">Login</button>
        </div>
    </div>


    <div class="container-hero">
        <div class="hero-content">
            <div class="search-hero">
                <p id="title-content">Solusi Kesehatan Terlengkap</p>
                <p id="sub-title">Layanan Booking Dokter Terbaik di Indonesia</p>
                <button class="btn-register" onclick="openRegister()">Register</button>
            </div>
            <div class="hero-image">
                <img class="hero-img" src="assets/bro.svg" alt="">
            </div>
        </div>
    </div>

    <!-- <div>
        <?php
        if (isset($_POST['create'])) {
            echo '<h1>User submited';
        }
        ?>
    </div>
 -->

    <!-- popup form login -->

    <div class="form-popup" id="myForm">
        <form action="php/login.php" class="form-container">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="user_password" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

            <p>Don't have account?
                <a onclick="openForm()">Register here</a>
            </p>

        </form>
    </div>


    <!-- end -->

    <!-- popup form Register -->

    <div class="form-popup" id="register">
        <form method="POST" action="php/register.php" class="form-container">
            <h1>Register</h1>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="username" required>


            <label for="nik"><b>Nik</b></label>
            <input type="text" placeholder="Enter NIK" name="user_nik" required>

            <label for="phone"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Phone Number" name="user_phone" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="user_email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="user_password" required>

            <button type=" submit" class="btn" value="submit">Register</button>
            <button type="button" class="btn cancel" onclick="closeRegister()">Close</button>

            <p>Have already an acount? <a href="">Login here</a></p>
        </form>
    </div>


    <!-- end -->




    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }


        function openRegister() {
            document.getElementById("register").style.display = "block";
        }

        function closeRegister() {
            document.getElementById("register").style.display = "none";
        }
    </script>

</body>

</html>
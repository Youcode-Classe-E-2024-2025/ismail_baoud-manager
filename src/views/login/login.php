<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Login - Scholar Online School</title>


    <link href="../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../../../public/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../public/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../../../public/assets/css/owl.css">
    <link rel="stylesheet" href="../../../public/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>

        .con{
    background-image: url('../../../public/assets/images/touth-2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .auth-section {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 60px 0;
        }
        .auth-container {
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        .auth-header h2 {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center;
        }
        .auth-header p {
            font-size: 14px;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .main-button {
            text-align: center;
        }
        .main-button a {
            background: #0d6efd;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .main-button a:hover {
            background: #0d6efd;
        }
        .auth-footer {
            text-align: center;
            margin-top: 20px;
        }
        .auth-footer a {
            text-decoration: none;
            color:rgb(26, 156, 30);
        }
    </style>
</head>

<body>

<div class="con">
    
<div class="auth-section">
        <div class="auth-container">
            <div class="auth-header">
                <h2>Login to RNVous</h2>
                <p>Welcome back! Please login to your account.</p>
            </div>

            <form action="/analyse" method="POST">
             
                <input type="text" class="form-control" placeholder="Username" name="username" required>
                

                <input type="password" class="form-control" placeholder="Password" name="password" required>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                </div>

                <div class="main-button">
                    <input type="submit" class="btn btn-primary" name="login_btn" value="Login">
                </div>

                <div class="auth-footer">
                    <p class="text-dark">Don't have an account? <a href="/signUp">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
    
    <script src="../../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
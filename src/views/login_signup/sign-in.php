<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Sign Up - Scholar Online School</title>


    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
    <link rel="stylesheet" href="../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
        }
        .auth-section {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 60px 0;
        }
        .auth-container {
            background: #fff;
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
            padding: 12px 30px;
            font-size: 16px;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
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
            color: #4CAF50;
        }
    </style>
</head>

<body>

<?php include "../../modules/getDataOfAdmin.php";?>

    <div class="auth-section">
        <div class="auth-container">
            <div class="auth-header">
                <h2>Sign Up</h2>
                <p>Create an account to get started with Scholar Online School</p>
            </div>

            <form method="POST">

                <input type="text" class="form-control" placeholder="First Name" name="first_name" required>

      
                <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>

 
                <input type="number" class="form-control" placeholder="Age" name="user_age" required>

                <input type="text" class="form-control" placeholder="Address" name="user_address" required>

       
                <input type="text" class="form-control" placeholder="Phone Number" name="user_phone" required>


                <input type="password" class="form-control" placeholder="Password" name="user_password" required>

 
                <div class="main-button">
                    <input type="submit" name="sign-up-button" value="Sign Up" class="btn btn-primary">
                </div>

                <div class="auth-footer">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

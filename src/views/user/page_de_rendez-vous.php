<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Book an Appointment - Dentist</title>

    <link href="../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../../../public/assets/css/fontawesome.css">


    <link rel="stylesheet" href="../../../public/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../../../public/assets/css/owl.css">
    <link rel="stylesheet" href="../../../public/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    <style>
        .con{
    background-image: url('../../../public/assets/images/touth-1.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    
}
        .appointment-form {
            margin-top: 50px;
            padding: 30px;

            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            margin-bottom: 15px;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
        <div class="con offcanvas-backdrop">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 appointment-form">
                <h2 class="text-center">Schedule Your Dentist Appointment</h2>
                <form action="/appointment" method="POST">
 
                
                    <div class="form-group  mt-4">
                        <label for="appointment_date">Preferred Appointment Date</label>
                        <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                    </div>

                    <div class="form-group  mt-4">
                        <label for="name">name of doctor</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group text-center mt-5">
                        <input type="submit" name="submit-btn" class="submit-btn btn-primary" value="Book Appointment">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="../../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

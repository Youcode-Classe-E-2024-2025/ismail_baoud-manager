<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../public/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../../../public/assets/css/owl.css">
    <link rel="stylesheet" href="../../../public/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <style>
        .admin-dashboard {
            background-color: #f4f6f9;
            min-height: 100vh;
        }
        .sidebar {
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            padding-top: 20px;
        }
        .content-area {
            margin-left: 250px;
            padding: 20px;
        }
        .user-table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="admin-dashboard">
    <div class="sidebar">
        <div class="text-center mb-4">
            <h3>Admin Panel</h3>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-white" href="/user_contacts">
                    <i class="fas fa-users"></i>les rendez-vous
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-chart-bar"></i> client contact 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/login">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    
    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4 mb-3">rendez vous Management</h1>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total ondez-vous</h5>
                                    <p class="card-text display-4"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">accept rendez-vous</h5>
                                    <p class="card-text display-4"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">refuse rendez-vous</h5>
                                    <p class="card-text display-4"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card user-table">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>age</th>
                                        <th>adress</th>
                                        <th>phone</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save User</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../../public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../public/assets/js/isotope.min.js"></script>
    <script src="../../../public/assets/js/owl-carousel.js"></script>
    <script src="../../../public/assets/js/counter.js"></script>
    <script src="../../../public/assets/js/custom.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">

    <link rel="stylesheet" href="../CSS/admindashboard.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu"
    rel="stylesheet">

</head>
    <body>
        <!-- Top Navbar-->
        <nav class="navbar navbar-dark fixed-top p-0 shadow"
        style="background-color: #225470;">
       
        <a class="navbar-brand col-sm-3 col-md-2 mr-0"
        href="admindashboard.php">E-Learning <small class="text-white">Admin
            Area</small></a>

        </nav>

        <!-- Side Bar-->
        <div class="container-fluid mb-5" style="margin-top:40px;'
            <div class="row">
                <nav class="col-sm-3 col-md-2 bg-light sidebar py-5
                d-print-none">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="adminDashboard.php">
                                <i class="fa fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Lessons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Student 
                                </a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Sell report
                                </a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Payment status
                                </a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Feedback
                                </a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Change password 
                                </a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fab fa-accessible-icon"></i>
                                Logout
                                </a>
                            </li>
                         </ul>
                    </div>
                </nav>
                <div class="col-sm-9 mt-5">
                    <div class="row mx-5 text-center">
                        <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3"
                        style="max-width: 18rem;">
                         <div class="card-header">Courses</div>
                         <div class="card-body">
                          <h4 class="card-title">
                           5
                            </h4>
                            <a class="btn text-white" href="#">View</a>
                        </div>
                    </div>
                </div>    
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-success mb-3"
                        style="max-width: 18rem;">
                        <div class="card-header">Students</div>
                            <div class="card-body">
                                <h4 class="card-title">
                                     25
                                </h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3"
                             style="max-width: 18rem;">
                            <div class="card-header">Sold</div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                      3
                                    </h4>
                                     <a class="btn text-white" href="#">View</a>
                                </div>
                            </div>
                        </div> I
                    </div>
                    <div class="mx-5 mt-5 text-center">
                    <!--Table-->
                    <p class=" bg-dark text-white p-2">Course Ordered</p>
                    <table class="table">  
                        <thead>
                            <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Course ID</th>
                            <th scope="col">Student Email</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <tr>
                                <th scope="row">22</th>
                                <td>100</td>
                                <td>sonam@gmail.com</td>
                                <td>20/10/2020</td>
                                <td>2000</td>
                                <td><button type="submit" class="btn
                                btn-secondary" name="delete" value="Delete"><i
                                    class="far fa-trash-alt"> </i></button></td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>        
    </div>
        <!-- div Row close from header -->
         <!-- div Conatiner-fluid close from header -->
        <!-- Jquery and Boostrap JavaScript -->
        <script type="text/javascript" src="JS/jquery.min.js"></script>
        <script type="text/javascript" src="JS/popper.min.js"></script>
        <script type="text/javascript" src="JS/bootstrap.min.js"></script>
        <!-- Font Awesome JS -->
        <script type="text/javascript" src="JS/all.min.js"></script>           
                        
    </body>
</html>
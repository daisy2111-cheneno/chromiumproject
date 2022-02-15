<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 bg-primary">
            <ul class="nav flex-column">
                <li class="nav-item stylenav">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                    <i class="fa fa-chrome fa-3x text-white"></i>
                    <span class="text-white">CHROMIUM ADMIN</span>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                    <i class="fa fa-dashboard fa-lg text-white"></i>
                    <div class="dropdown dropdown-toggle text-white">Dashboard
                        <div class="dropdown-content">
                            <a href="#m_earn" class="one">Monthly Earnings</a>
                            <a href="#to_do" class="two">To-do-List</a>
                            <a href="#requests" class="three">Requests</a>
                        </div>
                    </div>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <i class="fa fa-participants"></i>
                    <a class="nav-link" href="#"></a>
                    <i class="fa fa-users fa-lg text-white"></i>
                    <span class="text-white">Participants</span>
                </li>
                <li class="nav-item stylenav">
                    <i class="fa fa-components"></i>
                    <a class="nav-link" href="#"></a>
                    <i class="fa fa-gears fa-lg text-white"></i>
                    <span class="text-white">Components</span>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link"></a>
                    <i class="fa fa-file-o fa-lg text-white"></i>
                    <span class="text-white">Documents</span>
                </li>
                <li class="nav-item stylenav">
                    <a class="nav-link"></a>
                    <i class="fa fa-line-chart fa-lg text-white"></i>
                    <span class="text-white">Charts</span>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link"></a>
                    <i class="fa fa-paste fa-lg text-white"></i>
                    <span class="text-white">Forms</span>
                </li>
                <li class="nav-item stylenav">
                    <a class="nav-link"></a>
                    <i class="fa fa-wrench fa-lg text-white"></i>
                    <span class="text-white">Settings</span>
                </li>
            </ul>
        </div>


        <div class="col-9 bg-light">
            <div class="row bg-white p-2">
                <div class="col-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-3 form-control me-2" type="search" placeholder="Type here to Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell fa-lg"></i>
                                            <span class="badge rounded-pill bg-danger">3+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <p>
                                                <i class="btn fa fa-envelope" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">

                                                </i>
                                                <span class="badge rounded-pill bg-danger">8+</span>
                                            </p>
                                            <div>
                                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                                    <div class="card card-body">
                                                        This is some placeholder content for a horizontal collapse.                                                 </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            John Doe
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="images/female.svg" alt="" width="50" height="50">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>

            </div>










        <!--</div>

    </div>





</div>-->
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboadrd</title>
    <!--Bootstrap Cdn css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font awasome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
    
      
       
    </style>

</head>

<body>
  
    <!-- dashboard -->
    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <img src="../images/logo.png" class="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li>
                        <h2>DASHBOARD<h2>
                    </li>
                </ul>

            </div>
        </nav>
   </div>  

   
        <!-- sidebar   -->
        <div class="sidebar d-flex  w-100">

            <div id="left" class="col-md-2  bg-secondary p-0 ">
                <div class="navbar-nav ">
                    <li class="nav-item bg-primary">
                        <a href="#" class="navlink text-light text-center p-2">
                            <h4> Admin <i class="fas fa-user"></i></h4>
                        </a>
                    </li>


                    <ul class="navbar-nav me-auto text-center mb-3 mr-4">






                        <br>

                        <li class="nav-item ">
                            <a href="index.php?insert_product" class="navlink text-light">
                                <h5>Insert Products</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>View Products</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="index.php?insert_catagory" class="navlink text-light">
                                <h5>Insert Catagories</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>View Catagories</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>View Brand</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>All Orders</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>All Payments</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>List Users</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="index.php?insert_brand" class="navlink text-light">
                                <h5>Insert Brand</h5>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item ">
                            <a href="#" class="navlink text-light">
                                <h5>Logout <i class="fa fa-sign-out" aria-hidden="true"></i></h5>
                            </a>
                        </li>
                        <br>
                    </ul>



                </div>

            </div>

            <div class="col-md-10 bg-white m-0 p-5 right ">

                <?php
                if(isset($_GET['insert_catagory'])){
                    include('insert_catagory.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brand.php');
                }
                if(isset($_GET['insert_product'])){
                    include('insert_product.php');
                }
                
                ?>

            </div>
        </div>      

            <div>
            </div>
            </div>  
            </div>

                <div class=" fixed-bottom bg-info p-2 text-center ">
                    <p>Copyright © 2023 A.J.Siva </p>
                </div>

                <!--Bootstrap Cdn js-->
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
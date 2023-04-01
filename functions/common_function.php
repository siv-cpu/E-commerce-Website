<?php
//connect file
include("./includes/connect.php");
//condition is isset or not


   
//getting products
    function get_products(){
        if (!isset($_GET['categories'])) {
            if (!isset($_GET['brand'])) {
                if (!isset($_GET['search'])) {
           
        global $con;
        $select_query = "Select * from `product_table` order by rand() limit 6";
        $result = mysqli_query($con,$select_query);
        while($row =mysqli_fetch_assoc($result)){
              echo " <div class='col-md-4 w-100'>
              <div class='card' >
                      <img src='./images/$row[product_image1]' class='card-img-top' alt='...'>
              <div class='card-body'>
                      <h5 class='card-title'>$row[product_title]</h5>
                      <p class='card-text'>$row[product_description]</p>
                      <a href='#' class='btn btn-info'>Add Cart</a>
                        <a href='#' class='btn btn-dark'>View</a>
              </div>
              </div>  
      </div>";
        }
    }
}

}
}   


      //search products with keyword


      function search_products(){
       
        global $con;  
        if (isset($_GET['search'])) {
            //  echo "<script>alert('clicked')</script>";
            $search=$_GET['search_value'];
            
            $select_query = "Select * from `product_table` where product_keyword like '%$search%'";
        $result = mysqli_query($con,$select_query);
        while($row =mysqli_fetch_assoc($result)){
              echo " <div class='col-md-4'>
              <div class='card' >
                      <img src='./images/$row[product_image1]' class='card-img-top' alt='...'>
              <div class='card-body'>
                      <h5 class='card-title'>$row[product_title]</h5>
                      <p class='card-text'>$row[product_description]</p>
                      <a href='#' class='btn btn-info'>Add Cart</a>
                        <a href='#' class='btn btn-dark'>View</a>
              </div>
              </div>  
      </div>";
        }
    }

 }


        


//getting unique categories
function get_unique_cat(){
    global $con;
    if(isset($_GET['categories'])){
        $category_id =$_GET['categories'];
            
            $select_query = "Select * from `product_table` where category_id='$category_id' ";
            $result = mysqli_query($con,$select_query);
            $num_of_row = mysqli_num_rows($result);
            if( $num_of_row == 0){

                echo"<script>alert('product out of stock')</script>";
                
            }else{
                while($row =mysqli_fetch_assoc($result)){
                    echo " <div class='col-md-4 '>
                    <div class='card' >
                            <img src='./images/$row[product_image1]' class='card-img-top' alt='...'>
                    <div class='card-body'>
                            <h5 class='card-title'>$row[product_title]</h5>
                            <p class='card-text'>$row[product_description]</p>
                            <a href='#' class='btn btn-info'>Add Cart</a>
                                <a href='#' class='btn btn-dark'>View</a>
                    </div>
                    </div>  
            </div>";
                }
            }
           
}
}


//get unique brands click based in id and fetch data from Db

function get_unique_brands(){
    global $con;
    if(isset($_GET['brand'])){
        $brand_id =$_GET['brand'];
            
            $select_query = "Select * from `product_table` where brand_id='$brand_id' ";
            $result = mysqli_query($con,$select_query);
            while($row =mysqli_fetch_assoc($result)){
                echo " <div class='col-md-4'>
                <div class='card' >
                        <img src='./images/$row[product_image1]' class='card-img-top' alt='...'>
                <div class='card-body'>
                        <h5 class='card-title'>$row[product_title]</h5>
                        <p class='card-text'>$row[product_description]</p>
                        <a href='#' class='btn btn-info'>Add Cart</a>
                            <a href='#' class='btn btn-dark'>View</a>
                </div>
                </div>  
        </div>";
            }
}
}

//get brands
    function get_brands(){
            global $con;
        $select_query= "select * from `brands`";
        $result = mysqli_query($con,$select_query);
        while($row_data = mysqli_fetch_assoc($result)){
                echo "<li class='nav-item'>
                <a href='index.php?brand=$row_data[brand_id]' class='navlink text-light'><h5>$row_data[brand_title]</h5></a>";
        };
}

//get categories

    function get_cat(){
                global $con;
                $select_query = "Select * from categories";
                $result = mysqli_query($con,$select_query); 

                while($row_data = mysqli_fetch_assoc($result)){
        //id ah url la show panrathuku href la vangirukom.    
                echo "<li class='nav-item ''>
                <a href='index.php?categories=$row_data[category_id]' class='navlink text-light'><h5>$row_data[category_title]</h5></a>";
                }
    }






?>
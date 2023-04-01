<?php
//  header("Refresh:0");
 include('../includes/connect.php');


 if(isset($_POST['submit'])){
    // echo "<script>alert('data is already have')</script>";

        $product_title=$_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_keyword = $_POST['product_keyword'];
        $product_category = $_POST['product_category'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $status='true';
        
        //asscing name image
        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];
          
        //temp name
        $tmp_name1 = $_FILES['product_image1']['tmp_name'];
        $tmp_name2 = $_FILES['product_image2']['tmp_name'];
        $tmp_name3 = $_FILES['product_image3']['tmp_name'];


        //check empty
        if ( $product_title=='' or  $product_description=='' or  $product_keyword=='' or $product_category=='' or $product_brand=='' or $product_image1=='' or $product_image2=='' or $product_image3=='') {
            echo "<script>alert('please fill field')</script>";
            exit();
        } else {
             //send pic
        move_uploaded_file( $tmp_name1,"./product_images/$product_image1");
        move_uploaded_file(   $tmp_name2,"./product_images/ $product_image2");
        move_uploaded_file($tmp_name3,"./product_images/  $product_image3");

        //insert query to all pro
        // $insert_products = "INSERT INTO `product_table` (product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values(' $product_title',' $product_description','$product_keyword',$product_category,$product_brand,'$product_image1','$product_image2', '$product_image3',NOW(), '$status' )";
        $insert_products="INSERT INTO `product_table`( `product_title`, `product_description`, `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES ('$product_title','$product_description','$product_keyword','$product_category',' $product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$status')";

        $result = mysqli_query($con,$insert_products);

        if ($result) {
            echo "<script>alert('insert successfully');   if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href ); 
              }</script>";
        }
        //  header("Location: insert_product.php");
    
        }

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <div class="container w-50 h-">
    <form action="#" method="POST" enctype="multipart/form-data">
        <h2>Input Products</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Title</label>
            <input type="text" class="form-control" name="product_title" id="exampleFormControlInput1" placeholder="Enter Product Title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="product_description" id="exampleFormControlInput1" placeholder="Enter Product Description">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Keyword</label>
            <input type="text" class="form-control" name="product_keyword" id="exampleFormControlInput1" placeholder="Enter Product Keyword">
        </div>

        <div class="mb-3">
        <select class="form-select"  name="product_category">
                    <option >Select Catagory</option>

            
                    <?php
                        $select_query = "Select * from `categories`";
                        $result_query = mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                        
                        {
                        // $cat_id= $row['category_id'];
                        // $cat_name=$row['category_title'];
                        echo "<option value=' $row[category_id]'> $row[category_title]</option>";
                        }


            ?>
        </select>
        </div>

        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="product_brand">
                    <option selected>Select Brand</option>
                <?php
                $select_query =  "Select * from brands";
                $result = mysqli_query($con,$select_query);  

                while ($row=mysqli_fetch_array( $result)) {
                    echo "<option value='$row[brand_id]'>$row[brand_title]</option>";
                }
                
                ?>
        </select>
        </div>

                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Product image1</label>
                  <input type="file" class="form-control"  name="product_image1"  id="inputGroupFile01">
            </div>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Product image2</label>
                     <input type="file" class="form-control" name="product_image2"  id="inputGroupFile01">
                </div>
                
                 <div class="input-group mb-3">
                 <label class="input-group-text" for="inputGroupFile01">Product image3</label>
                    <input type="file" class="form-control" name="product_image3"  id="inputGroupFile01">
                </div>
    <div class="mb-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="product_price"  id="exampleFormControlInput1" placeholder="Enter price">
        </div> 
        <input type="submit" class="form-control bg-success"  name="submit" value="insert" >
    </form>
    </div>  



</body>
</html>
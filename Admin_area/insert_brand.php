<?php
include('../includes/connect.php');

if (isset($_POST['submit'])) {
   
   $brand_tit = $_POST['brand_title'];

    $select_query="Select * from  `brands` where brand_title='$brand_tit'";
    
    $result_select =mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    
    if( $number > 0){
        echo "<script>alert('data is already have');  
         if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href ); 
          }</script>";

    }
    else{
        
        $query="insert into `brands` (brand_title) values ('$brand_tit')";
        $result=mysqli_query($con,$query);
    if($result){
        echo "<script> alert('inserted successfully');
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href ); 
          } </script>";  //refresh the page controll resubmition
        
    }

     }
}



?>




<form method="post">
        <div class="input-group mb-2 w-50 ">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-brands fa-studiovinari"></i></i></i></span>
            <input type="text" class="form-control"  name="brand_title" placeholder="insert brand" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-2 w-50">
        <input type="submit" class="form-control bg-success"  name="submit" value="insert" aria-describedby="basic-addon1">
        </div>

</form>
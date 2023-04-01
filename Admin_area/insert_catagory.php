<?php

    include('../includes/connect.php');
    if(isset($_POST['insert_cat'])){
         $categories_title=$_POST['cat_title'];

         $select_query="Select * from  `categories` where category_title='$categories_title'";
    
         $result_select =mysqli_query($con,$select_query);
         $number=mysqli_num_rows($result_select);
         
         if( $number > 0){
             echo "<script>alert('data is already have');
             if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href ); 
              }</script>";
     
         }

        else{
            $query="insert into `categories` (category_title) value('$categories_title')";
            $result=mysqli_query($con,$query);
       if ($result) {
                echo  "<script> alert('Data is inserted successfully');
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href ); 
                  }</script>";
       }  
    
    }
       
       
 }
      
   
  
             
?>




<form  method="post">
        <div class="input-group mb-2 w-50">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-duotone fa-receipt"></i></i></span>
            <input type="text" class="form-control"  name="cat_title" placeholder="insert catagories" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-2 w-50 " id="insert">
        <input type="submit" class="form-control bg-success"  name="insert_cat" value="insert" aria-describedby="basic-addon1">
        </div>

</form>



<!-- <script>
    $(document).ready(function(){
        $("#insert").click(function(){
            $.ajax({
                url:""
            });

        });

    });
</script> -->
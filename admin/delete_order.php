<?php
include ("header.php");
?>




<?php 
if (isset($_POST['delete_order'])){
   
    $pro= $_GET['pro'];
    
	


	

$q1= "delete from hl_listings where  id=$pro ";
                         $run1=mysqli_query($con,$q1);

 if($run1){
    
   $pro= $_GET['pro'];
  
   	echo "<script>alert('Program Deleted Successful')</script>";
		  echo "<script>window.open('pending_programs.php','_self') </script>";
	  }
	 else {
	 	echo "<script>alert('Error')</script>";
		  echo "<script>window.open('pending_programs.php','_self') </script>";
	 } 
}

?>

<?php
include ("footer.php");
?>
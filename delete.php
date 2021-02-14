 <?php


 $conn= mysqli_connect("localhost","root",null,"comp_1006_lesson_03");
 //注意这里是$_GET,因为我们是点击了 link delete而不是submit a form
 $sql="DELETE FROM countries
       WHERE id={$_GET['id']}
 
 
 
 ";
 $result=mysqli_query($conn,$sql);
 session_start();
 if($result){
     $_SESSION["message"] =  "The country was deleted successfully";
 } else{
     $_SESSION["message"] =  "There was an error delete the record:".mysqli_error($conn);
 }
 header("Location:notification.php");
 exit();

 ?>
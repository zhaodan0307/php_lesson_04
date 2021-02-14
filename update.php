 <?php

  var_dump($_POST);
  $conn= mysqli_connect("localhost","root",null,"comp_1006_lesson_03");
  $sql="UPDATE  countries
        SET
        name= '{$_POST['name']}',
        description='{$_POST['description']}',
        population = {$_POST['population']}
        WHERE id={$_POST['id']} 
        ";
  var_dump($sql);
  $result=mysqli_query($conn,$sql);
  session_start();

  if($result){
      $_SESSION["message"] = "The country was updated successfully";
  } else{
      $_SESSION["message"] =  "There was an error updating the record:".mysqli_error($conn);
  }
    header("Location:notification.php");
    exit();

?>
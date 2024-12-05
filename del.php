<?php include "header.php"; ?>

<form method="POST" action="del.php">
    <input type="email" name="email" placeholder="Enter email" required>
    <button type="submit" name="send">Delete User</button>
</form>

<?php 
include "dbcon.php";
$email= $_POST["email"];    

#echo $email;   

$q = "DELETE FROM pation WHERE   email= '$email'";
$r = mysqli_query($con,$q); 
if(isset($send)){
    $send = $_POST["send"];
    if($r){
        header("location:admin.php"); 
            // echo "User with email". $email ."will be deleted.";
  
        }

}else{
    echo "problem in deleting user .";
}
?>
<div>
<button><a href="admin.php">Admin Page</a></button>
<butto ><a href="index.php">Index Page</a></button>

</div>


<form action="delete_all.php" method="POST">
    <button name="delete_all" type="submit" >Delete_All </button>

</form>




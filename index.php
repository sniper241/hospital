<?php
include "header.php";


?>
<div>
<button><a href="admin.php">Admin Page</a></button>
</div>
<div>
<butto ><a href="del.php">Delete Page</a></button>

</div>

<div class="book" >
    <p>Welcome to our Hospital to makeabooking please fill this form </p>
    <form action="index.php" method="POST">
        <input type="text" required placeholder="Enter your name " name="name">
        <input type="email" required placeholder="Enter your email " name="email">
        <input type="date" required placeholder="" name="date">
        <input type="submit" value="make_abooking" name="send">
    </form>
    <?php 
    include "dbcon.php";
    $name =$_POST["name"];
    $email =$_POST["email"];
    $date =$_POST["date"];
    $send =$_POST["send"]; 
    
    # recive data from FORM
    #echo  "-". $name . "-". $email . "-". $date ;
    if(isset($send)){
    $q = "INSERT INTO pation (name,email,date)VALUES('$name','$email','$date')";
    $r = mysqli_query($con  ,$q);
    if($r){
        echo " -inseration completed.";
        header("location:admin.php.  ");
    }else{
        echo " -inseration not completed.     ";
    }
    }
    ?>












    

</div>
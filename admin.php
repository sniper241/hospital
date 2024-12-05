<?php 
include  "header.php";  

?>
<table>
    <th>Number</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
<?php 
include "dbcon.php";
$q = "SELECT * FROM pation";
$r = mysqli_query($con,$q);
if($r){
    while($row =mysqli_fetch_array($r)){

        echo '<tr><td>' .
         $row['id'] ."</td><td>". 
         $row['name'] ."</td><td>".
         $row['email'] . "</td><td>".
         $row['date']. 
        '</td></tr>';
    }
}
?>
<div>
<button><a href="index.php">Index Page</a></button>
<butto ><a href="del.php">Delete Page</a></button>

</div>



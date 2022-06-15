<!DOCTYPE html>
<html>
    <head></head>
    <style>
        table,th,td{
            border: solid 1px black;
        }
    </style>
    <body>

<?php
$con=mysqli_connect('localhost','root','','laundry website');

$Full_Name=$_POST['Full_Name'];
$Phone_Number=$_POST['Phone_Number'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$Selected_pickup_date=$_POST['Selected_pickup_date'];
$Selected_time_for_pickup=$_POST['Selected_time_for_pickup'];
$sql="INSERT INTO laundry VALUES('$Full_Name','$Phone_Number','$Email','$Address','$Selected_pickup_date','$Selected_time_for_pickup')";
if(mysqli_query($con,$sql)){
    echo "data stored in database";
}

$sql2="select * from laundry ";
$result1=mysqli_query($con,$sql2);

?>
    <section> 

<h1>Laundry data</h1> 
<table> 
    <tr> 
        <th>Full-Name</th> 
        <th>Phone-Number</th> 
        <th>E-mail</th>
        <th>Address</th>
        <th>Pickup-Date</th>
        <th>Pickup-Time</th>
        
    </tr> 
    <?php   
    while($rows=$result1->fetch_assoc()) 
    { ?> 

    <tr>
        <td><?php echo $rows['Full_Name'];?></td> 
        <td><?php echo $rows['Phone_Number'];?></td> 
        <td><?php echo $rows['Email'];?></td>
        <td><?php echo $rows['Address'];?></td>
        <td><?php echo $rows['Selected_pickup_date'];?></td>
        <td><?php echo $rows['Selected_time_for_pickup'];?></td>
        

    </tr> 
    <?php 

        } 

     ?> 
     <h1>Order has Successfully Registered</h1>
     

</table> 
    </section>
    </body>
</html>

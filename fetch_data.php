<?php

include("connection2.php");

error_reporting();

?>

<html>
    <head><title>fetch data</title></head>
    <body>
        <table border="1">
            <tr>
                <th>Id_no.</th>
                <th>Name</th>
                <th>D-O-B</th>
                <th>Gender</th>
                <th>Profile</th>
                <th>Terms</th>
                <th>Subject</th>
                <th>Address</th>
                <th>Email-id</th>
                <th>Password</th>
                <th>Mobile No</th>
            </tr>
            
<?php
$query="SELECT * FROM students";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total!=0)
{
while($result=mysqli_fetch_assoc($data))
{
    echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['dob']."</td>
            <td>".$result['gender']."</td>
            <td><img src='".$result['profile']."' height=100 width=100></td>
            <td>".$result['terms']."</td>
            <td>".$result['subject']."</td>
            <td>".$result['address']."</td>
            <td>".$result['email_id']."</td>
            <td>".$result['password']."</td>
            <td>".$result['mobile_no']."</td>
            </tr>";
}
}
else
{
    echo "Failed to fetch data";
}
?>
</table>
</body>
</html>

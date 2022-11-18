<?php
include("connection2.php");

error_reporting();

extract($_post);

if((isset($_POST['submit'])))
{
   $nm=$_POST['namme'];
   $dt=$_POST['datee'];
   $ge=$_POST['m'];

//    $pp=$_FILES['profilee']['name'];


   $filename=$_FILES["profilee"]["name"];
   $tempname=$_FILES["profilee"]["tmp_name"];
   $folder="gallery/".$filename;
   move_uploaded_file($tempname,$folder);
//    print_r($_FILES["profilee"]);
// echo $folder;

   $ch=$_POST['check'];
   $sb=$_POST['sub'];
   $ad=$_POST['add'];
   $em=$_POST['email'];
   $ps=md5($_POST['pass']);
   $mo=$_POST['mobile'];

   $query1="SELECT * FROM students WHERE email_id='$em'";
   $data1=mysqli_query($conn,$query1);

   if($data1 > 0)
   {
       echo "email already exits";
   }
   else{

   $query="INSERT INTO students (`name`,`dob`, `gender`, `profile`, `terms`, `subject`, `address`, `email_id`, `password`, `mobile_no`)VAlUES('$nm','$dt','$ge','$folder','$ch','$sb','$ad','$em','$ps','$mo')";
    // echo $query;die;
   $data=mysqli_query($conn,$query);

    if($data)
   {
    // echo "inserted successfully";
   }
   else
   {
    echo "failed to insert";
   }
   }
}

?>
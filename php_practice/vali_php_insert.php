<?php

include ("connection1.php");


error_reporting();

if(isset($_POST['submit']))
{
   $nm=$_POST['namme'];
   $dt=mysqli_real_escape_string($conn,$_POST['datee']);
   $ge=mysqli_real_escape_string($conn,$_POST['gen']);

//    $pp=$_FILES['profilee']['name'];


   $filename=$_FILES["profilee"]["name"];
   $tempname=$_FILES["profilee"]["tmp_name"];
   $folder="gallery/".$filename;
   move_uploaded_file($tempname,$folder);
//    print_r($_FILES["profilee"]);
// echo $folder;

   $ch=mysqli_real_escape_string($conn,$_POST['check']);
   $sb=mysqli_real_escape_string($conn,$_POST['sub']);
   $ad=mysqli_real_escape_string($conn,$_POST['add']);
   $em=mysqli_real_escape_string($conn,$_POST['email']);
   $mo=mysqli_real_escape_string($conn,$_POST['mobile']);

   $ps=($_POST['pass']);
   $cps=($_POST['conpass']);
  
   if(empty($nm))
   {
    $error="username field is required";
   }
   elseif(empty($dt))
   {
    $error="date field is required";
   }
   elseif(empty($ge))
   {
    $error="gender is required";
   }
   elseif(empty($filename))
   {
    $error="file is required";
   }
   elseif(empty($sb))
   {
    $error="subject is required";
   }
   elseif(empty($ad))
   {
    $error="address is required";
   }
   elseif(empty($em))
   {
    $error="email is required";
   }
   elseif(empty($ps))
   {
    $error="password is required";
   }
   elseif(strlen($ps) < 6)
   {
    $error="password mus be in between 6 to 8 characters";
   }
   elseif(empty($cps))
   {
    $error="conpassword is required";
   }
   elseif($cps!=$ps)
   {
    $error="conpassword dose not match with password";
   }
   elseif(empty($mo))
   {
    $error="mobile no. is required";
   }
   elseif(empty($ch))
   {
    $error="fill the checkbox is required";
   }
   else
   {
    $check_email="SELECT * FROM students WHERE email_id='$em'";

    $data = mysqli_query($conn,$check_email);

    if(mysqli_num_rows($data) > 0)
    {
        $error="Email already exits";
    }
    else
    {
        $pas=md5($ps);
        $query="INSERT INTO students (`name`,`dob`, `gender`, `profile`, `terms`, `subject`, `address`, `email_id`, `password`, `mobile_no`)VAlUES('$nm','$dt','$ge','$folder','$ch','$sb','$ad','$em','$pas ','$mo')";

        $data=mysqli_query($conn,$query);

        if($data)
        {
            $success="your data has been inserted successfully";
        }
    }
    }
   
}
?>

   
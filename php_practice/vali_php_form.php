<?php
include ("connection1.php");

include ("vali_php_insert.php");
error_reporting(0);

?>
<html>
    <head><title>registration form</title>

    <link rel="stylesheet" text="text/css" href="css/vali.css">
    
</head>
    <body>

    <p style="color:red">
        
        <?php
            if(isset($error))
            {
                echo $error;
            }
        ?>
    </p>
    <p style="color:green">

        <?php
            if(isset($success))
            {
                echo $success;
            }
        ?>
    </p>

    </p>
        <table border="1" align="center" cellpadding="5" cellspacing="2">
        <form action="vali_php_form.php" method="post" enctype="multipart/form-data" autocomplete="off" >
            <tr>
                <td colspan="2" align="center"><h1>Registration Form</h1></td>
            </tr>
            <tr>
                <td>Name:</td><td><input type="text" name="namme" value="<?php if(isset($error)) { echo $nm; } ?>" placeholder="Name" ></td>
            </tr>
            <tr>
                <td>DOB:</td><td><input type="date" name="datee" value="<?php if(isset($error)) { echo $dt; } ?>"></td>
            </tr>
            <tr>
                <td>Gender:</td><td><input type="radio" name="gen" value="Male">Male
                   <input type="radio" name="gen" value="Female">Female</td>
                </tr>
            <tr>
                <td>Profile picture:</td><td><input type="file" name="profilee" value="<?php if(isset($error)) { echo $nm; } ?>"></td>
            </tr>
            <tr>
                <td>Subject:</td><td><select name="sub" value="<?php if(isset($error)) {echo $sb;} ?>">
                    <option value="English">English</option>       
                    <option value="Hindi">Hindi</option>       
                    <option value="marathi">Marathi</option>       
                    <option value="gujrati">Gujarati</option>
                   </select></td>
                </tr>
            <tr>
                <td>Address:</td><td><textarea rows="5" cols="30" name="add" value="<?php if(isset($error)) { echo $ad; } ?>"></textarea></td>
            </tr>
            <tr>
                <td>Email-id:</td><td><input type="email" name="email" id="email" value="<?php if(isset($error)) { echo $em; } ?>" placeholder="emailid"></td>
            </tr>
            <tr>
                <td>Password:</td><td><input type="password" name="pass" id="pass" value="" placeholder="password"></td>
            </tr>
            <tr>
                <td>confirm Password:</td><td><input type="password" name="conpass" id="conpass" value="" placeholder="password"></td>
            </tr>
            <tr>
                <td>mobile No.:</td><td><input type="text" name="mobile" id="mob" value="<?php if(isset($error)) { echo $mo; } ?>" placeholder="mobile no"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="checkbox" name="check" value="<?php if(isset($error)) { echo $ch; } ?>I agree">terms & Conditions</checkbox></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
            <tr>
                    
        </form>
     </table>
</body>
</html>




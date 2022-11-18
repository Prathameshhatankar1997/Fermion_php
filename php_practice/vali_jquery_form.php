<?php
include ("connection1.php");

error_reporting();

?>
<html>
    <head><title>registration form</title>

    <link rel="stylesheet" href="css/style.css">
    
</head>
    <body>
        <script src="javascript/validation.js"></script>
        <table border="1" align="center" cellpadding="5" cellspacing="2">
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validation()">
            <tr>
                <td colspan="2" align="center"><h1>Registration Form</h1></td>
            </tr>
            <tr>
                <td>Name:</td><td><input type="text" name="namme" value="" id="namme" placeholder="name" required></td>
            </tr>
            <tr>
                <td>DOB:</td><td><input type="date" name="datee" value="" required></td>
            </tr>
            <tr>
                <td>Gender:</td><td><input type="radio" name="m" value="Male" required>Male
                   <input type="radio" name="m" value="Female" required>Female</td>
                </tr>
            <tr>
                <td>Profile picture:</td><td><input type="file" name="profilee" value="" required></td>
            </tr>
            <tr>
                <td>Subject:</td><td><select name="sub" required>
                    <option value="English">English</option>       
                    <option value="Hindi">Hindi</option>       
                    <option value="marathi">Marathi</option>       
                    <option value="gujrati">Gujarati</option>
                   </select></td>
                </tr>
            <tr>
                <td>Address:</td><td><textarea rows="5" cols="30" name="add" required></textarea></td>
            </tr>
            <tr>
                <td>Email-id:</td><td><input type="email" name="email" id="email" required value="" placeholder="emailid"><br><span id="emaill"></span></td>
            </tr>
            <tr>
                <td>Password:</td><td><input type="password" name="pass" id="pass" value="" placeholder="password"><br><span id="passs"></span></td>
            </tr>
            <tr>
                <td>confirm Password:</td><td><input type="password" name="conpass" id="conpass" value="" placeholder="password" required><br><span id="conpasss"></span></td>
            </tr>
            <tr>
                <td>mobile No.:</td><td><input type="text" name="mobile" id="mob" value="" placeholder="mobile no"><br><span id="mobb"></span></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="checkbox" name="check" value="I agree" required>terms & Conditions</checkbox></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
            <tr>
                 
        </form>
     </table>
     <script>

        $(document).ready(function(){

            $('#submit').click(function(){

                var name = $('#namme').val();

                if()
            })
        })
       </script> 
    </body>
</html>  
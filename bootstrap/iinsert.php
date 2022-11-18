<html>
<head><title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="bootstrap.main.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"><br>

        <h1 class="text-center">Inserting data using Ajax PHP and mysqli</h1>

    <br>
    <div class="col-lg-8 m-auto">
    
        <form id="myform" class="form-horizontal" action="/insertphp.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-9">
                   <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Date of birth:</label>
                <div class="col-sm-9">
                   <input type="date" class="form-control" id="date" name="dob" placeholder="Enter D-O-B" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender:</label>
                    <div class="col-sm-9">
                <div class="radio">
                    <label><input type="radio" name="optradio" required>Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Female</label>
                </div>
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="file">Profile picture:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="file" name="profilee" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Select subject:</label>
                <div class="col-sm-9">
                <select class="form-control" name="sub" required>
                    <option>English</option>
                    <option>Marathi</option>
                    <option>Hindi</option>
                    <option>Gujarathi</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Address:</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="2" id="comment" name="add" required></textarea>
                </div>    
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email-id:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="email" name="email" placeholder="Enter Email-id" required>
                </div>
            </div>    
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="conpwd">Confirm Password:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="conpwd" name="conpass" placeholder="Enter password" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mob">Mobile-no:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="mob" name="mobile" placeholder="Enter Mobile No." required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    <label><input type="checkbox" name="check" required>I Agree terms and Conditions</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</div>

<script>
    $(document).ready(function(){

        var form=$('#myform');

        $('#submit').click(function(){

            $.ajax({

                url:form.attr("action"),

                data:$("#myform input").serialize(),

                success:function(data)
                {
                    console.log(data);
                }

            });
        });
    });
</script>
</body>
</html>
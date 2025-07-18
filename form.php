<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                Registration Form
            </div>

            <div class="form">

                <div class="input_field" >
                    <label>Upload Image</label>
                    <input type="file" name="uploadfile" style="width:100%;">
                </div>


                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>


                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required>
                </div>

                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="cpassword" required>
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select name="gender">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                </div>
                <div class="input_field">
                    <label>Email Address</label>
                    <input type="text" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phone" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address" required></textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>

            </div>
        </form>
    </div>
</body>

</html>


<?php
    if($_POST['register']) 
    {

        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($tempname,$folder);



        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $pwd     = $_POST['password'];
        $cpwd    = $_POST['cpassword'];
        $gen     = $_POST['gender'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];

        $query = "INSERT INTO manage(Image ,fname, lname, gender, email, phone, address) 
        VALUES ('$folder','$fname', '$lname', '$gen', '$email', '$phone', '$address')";

            $data = mysqli_query($conn,$query);
            if($data) 
            {
                echo "Data inserted";
            }
            else
            {
                echo "Not inserted";
            }
        }

?>
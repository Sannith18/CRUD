<?php include("connection.php"); 
    $id = $_GET['id'];
   
    $query = "select * from manage where id='$id'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<body>
    <div class="container">
        <form action="#" method="POST">

            <div class="title">
                UPDATE STUDENT DETAILS
            </div>

            <div class="form">

                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" value="<?php echo $result['fname']?>" class=" input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" value="<?php echo $result['lname']?>" class="input" name="lname" required>
                </div>


                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" value="<?php echo $result['password']?>" name="cpassword" required>


                </div>

                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input" value="<?php echo $result['password']?>" name="cpassword"
                        required>

                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">


                        <select name="gender" required>
                            <option value="">Select</option>

                            <option value="Male" <?= ($result['gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= ($result['gender'] == 'Female') ? 'selected' : '' ?>>Female
                            </option>
                        </select>


                    </div>

                </div>
                <div class=" input_field">
                    <label>Email Address</label>
                    <input type="text" value="<?php echo $result['email']?>" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" value="<?php echo $result['phone']?>" class="input" name="phone" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address" required><?php echo $result['address'];?> 
                </textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" value="Update" class="btn" name="update">
                </div>
        </form>
    </div>
</body>

</html>


<?php
    if (isset($_POST['update'])) 
    {
        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $pwd     = $_POST['password'];
        $cpwd    = $_POST['cpassword'];
        $gen     = $_POST['gender'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];

            $query ="update manage set fname='$fname',lname='$lname',password='$pwd',gender='$gen',email='$email',phone='$phone',address='$address' where id='$id'";
            $data = mysqli_query($conn,$query);
            if($data) 
            {
                echo "<script>alert('Record updated')</script>";  
} 
else 
{ 
    echo " Not Updated" ; 
    } 
    } 
    ?>
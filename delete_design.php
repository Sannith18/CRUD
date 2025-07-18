<?php
    include("connection.php"); 
    $id = $_GET['id'];

    $query = "delete from manage where id='$id' ";
    $data=mysqli_query($conn,$query);
    
    if($data) {
        echo "<script>alert('Record deleted')</script>";
        ?>

        <meta hhtp-equiv="refresh" content="0; url = http://localhost/crud/display.php" />

        <?php
    }
    else {
        echo "Not deleted";
    }
?>
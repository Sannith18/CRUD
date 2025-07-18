<html>

<head>
    <title>Display</title>
    <style>
    body {
        background: #D071f9;

    }

    table {
        background: white;
    }

    .update {
        background-color: green;
        color: white;
        border-radius: 3px;
        border: 0;
        outline: none;
        height: 27px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
    }

    .delete {
        background-color: red;
        color: white;
        border-radius: 3px;
        border: 0;
        outline: none;
        height: 27px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
    }
    </style>
</head>

</html>


<?php

    include("connection.php") ;

    $query = "select * from manage";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    
    
    if($total != 0) {
        ?>

<h2 align="center">Displaying All Records</h2>

<center>
    <table border="1px" cellspacing="7" width="100%">
        <tr>
            <th width="5%">ID</th>
            <th width="5%">Image</th>
            <th width="8%">First_Name</th>
            <th width="10%">Last_Name</th>
            <th width="8%">Gender</th>
            <th width="15%">Email</th>
            <th width="10%">Phone</th>
            <th width="20%">Address</th>
            <th width="11%">Operations</th>
        </tr>

        <?php
        while($result = mysqli_fetch_assoc($data)){
            echo "<tr>
                    <td>".$result['ID']."</td>

                    <td><img src='".$result['Image']."' height='100px' width='100px';></td>

                    <td>".$result['fname']."</td>
                    <td>".$result['lname']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['address']."</td>

                    <td><a href='update_design.php?id=$result[ID]'> <input type='submit' value='Update' class='update'></a>
                    
                    <a href='delete_design.php?id=$result[ID]'> <input type='submit' value='Delete' class='delete' onclick='return checkdelete()' ></a></td>
                </tr>";
        }
    }
    else{
        echo "No records found";
    }
?>

    </table>
</center>

<script>
    function checkdelete() {
        return confirm('Are you sure, you want to delete this record');
    }
</script>
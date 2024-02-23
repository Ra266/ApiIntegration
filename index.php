<?php
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM curdopt ORDER BY id ASC");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student record</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .container {
            width: 600px;
            border: 3px solid black;
            padding: 15px;
            margin: auto;
            border-radius: 8px;
        }

        h1 {
            text-align: center;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Student Record</h1>
        <button> <a href="add.php">Add New User</a></button>


        <br><br>
        <table>
            <tr>
                <th>Id</th>
                <th>Name </th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Update</th>

            </tr>
            <?php
            while ($data_user = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $data_user['id'] . "</td>";
                echo "<td>" . $data_user['name'] . "</td>";
                echo "<td>" . $data_user['email'] . "</td>";
                echo "<td>" . $data_user['mobile'] . "</td>";

                echo "<td><button><a href='edit.php?id=$data_user[id]'>Edit</a></button> 
                <button><a href='delete.php?id=$data_user[id]'>Delete</a></button> </td></tr>";
            }
            ?>

        </table>
    </div>

</body>

</html>
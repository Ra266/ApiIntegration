<?php

include_once("config.php");


if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];


    $result = mysqli_query($conn, "UPDATE curdopt SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");


    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM curdopt WHERE id='$id'");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
//header("location:index.php");
?>
<html>

<head>
    <title>Edit User Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email; ?>></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html
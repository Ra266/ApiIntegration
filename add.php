<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <a href="index.php">Home</a>


    <form action="add.php" method="post">
        <table>
            <tr>
                <th>Name:</th>
                <td> <input type="text" name="name" id="3"> </td>
            </tr>

            <tr>
                <th>Email:</th>
                <td> <input type="text" name="email" id="4"> </td>
            </tr>
            <tr>
                <th>Mobile:</th>
                <td> <input type="text" name="mobile" id="6"> </td>
            </tr>
            <tr>
                <th></th>
                <td> <input type="submit" name="submit" id="3" value="Add Data"> </td>
            </tr>

        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        include_once("config.php");
        $result = mysqli_query($conn, "INSERT INTO curdopt(name,email,mobile) VALUES('$name','$email','$mobile')");
        if ($result) {
            echo "sucessfull . <a href='index.php'>VIEW </a>";
        }
    }
    ?>
</body>

</html>
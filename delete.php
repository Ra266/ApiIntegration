<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>



    <?php

    $id = $_GET['id'];

    include_once("config.php");

    $result = mysqli_query($conn, "DELETE FROM curdopt WHERE id=$id");
    if ($result) {
        echo $id . "sucessful delete ";
    } else {
        echo "id not found";
    }

    header("location:index.php");
    ?>


</body>

</html>
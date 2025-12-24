<?php
require_once "db.php";
$message = "";

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $blood = $_POST['blood'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];

    if ($name == "" || $blood == "" || $phone == "" || $location == "") {
        $message = "All fields are required!";
    } else {
        $sql = "INSERT INTO donors (name, blood_group, phone, location)
                VALUES ('$name', '$blood', '$phone', '$location')";

        if (mysqli_query($conn, $sql)) {
            $message = "Donor added successfully!";
        } else {
            $message = "Database error!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Donor</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background-image: url("blood1.png");
            background-size: cover;
            background-position: center;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .content {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            width: 350px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
        }

        button, a {
            padding: 10px 20px;
            background: #c62828;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            display: inline-block;
            margin-top: 10px;
        }

        button:hover, a:hover {
            background: #b71c1c;
        }
    </style>
</head>

<body>

<div class="content">
    <h2>Add Donor</h2>

    <form method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="blood" placeholder="Blood Group">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text" name="location" placeholder="Location">
        <button type="submit" name="add">Add Donor</button>
    </form>

    <p style="color:red;"><?php echo $message; ?></p>

    <a href="index.php">⬅ Back</a>
</div>

</body>
</html>

<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Donor</title>
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
            width: 500px;
        }

        input {
            padding: 10px;
            margin: 8px;
            width: 40%;
        }

        button, a {
            padding: 10px 20px;
            background: #c62828;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover, a:hover {
            background: #b71c1c;
        }

        .results {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>

<body>

<div class="content">
    <h2>Search Donor</h2>

    <form method="post">
        <input type="text" name="blood" placeholder="Blood Group">
        <input type="text" name="location" placeholder="Location">
        <br>
        <button type="submit">Search</button>
    </form>

    <div class="results">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $blood = $_POST['blood'];
            $location = $_POST['location'];

            $query = "SELECT * FROM donors WHERE 1=1";

            if ($blood != "") {
                $query .= " AND blood_group='$blood'";
            }

            if ($location != "") {
                $query .= " AND location='$location'";
            }

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Name: ".$row['name']." | Blood: ".$row['blood_group']." | Phone: ".$row['phone']." | Location: ".$row['location']."<br>";
                }
            } else {
                echo "No donor found";
            }
        }
        ?>
    </div>

    <br>
    <a href="index.php">⬅ Back</a>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Donation System</title>

    <style>
        body {
            margin: 0;
            height: 100vh;

            /* Background image */
            background-image: url("blood1.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

            /* Light blur effect */
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);

            /* Center content */
            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, sans-serif;
        }

        .content {
            background: rgba(255, 255, 255, 0.75);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 12px 25px;
            background: #c62828;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 18px;
        }

        a:hover {
            background: #b71c1c;
        }
    </style>
</head>

<body>

    <div class="content">
        <h1>Blood Donation Management System</h1>

        <a href="add_donor.php">➕ Add Donor</a>
        <a href="search_donor.php">🔍 Search Donor</a>
    </div>

</body>
</html>

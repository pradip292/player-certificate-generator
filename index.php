<!DOCTYPE html>
<html>
<head>
    <title>Select Player</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Select Player</h1>
    <form action="certificate.php" method="post">
        <label for="player">Select a player:</label>
        <select id="player" name="player">
            <!-- Populate the dropdown with player names from the database -->
            <?php
            
            // Connect to your database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "players";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to select player names
            $sql = "SELECT name FROM names";
            $result = $conn->query($sql);

            // Display player names in the dropdown
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select>
        <br><br>
        <input type="submit" value="Generate Certificate">
    </form>
</body>
</html>

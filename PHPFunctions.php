<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
// Set variables for connecting to the SQL database
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "form_lib";

// Connect to the SQL database
            $sqlConnect = new mysqli($servername, $username, $password, $dbname);

// Define variables ready for insertion into the database
            $firstname = $sqlConnect->real_escape_string($_POST['first_name']);
            $surname = $sqlConnect->real_escape_string($_POST['surname']);
            $email = $sqlConnect->real_escape_string($_POST['email']);
            $gender = $sqlConnect->real_escape_string($_POST['gender']);
            $age = $sqlConnect->real_escape_string($_POST['age']);
            $message = $sqlConnect->real_escape_string($_POST['message']);
            $newsletter = $sqlConnect->real_escape_string($_POST['newsletter']);
            $service = $sqlConnect->real_escape_string($_POST['service']);

// Test connectiong to SQL server
            if ($sqlConnect->connect_error) {
                die("Connection failed: " . $sqlConnect->connect_error);
            }

// Insert the data into the SQL table
            if (isset($_POST['submit'])) {
                $sql = "INSERT INTO submissions (first_name, surname, email, gender, age, message, newsletter, service ) 
VALUES ('$firstname', '$surname', '$email', '$gender', '$age', '$message', '$newsletter', '$service')";
                echo "<b><u>Attempting to add the data into the SQL database</u></b>", '<br/>', '<br/>';
                if ($sqlConnect->query($sql) === TRUE) {
                    echo "New record has been added to the SQL database successfully", '<br/>', '<br/>';
                } else {
                    echo "The record has not been added to the SQL database", '<br/>';
                    echo "Please try enter the above information again", '<br/>';
                    echo "There was an error loading the data in the database " . $sql . "<br>" . $sqlConnect->error;
                    echo '<br/>', '<br/>';
                }
            }

// Close conection to the database
            $sqlConnect->close();
            ?>
            <p><strong>Click the Button to return to the Main Page</strong></p>
            <button type="button" onclick="redirectToMainPage()">Click Me!</button>
        </div>

        <script>
            function redirectToMainPage() {
                location.replace("http://localhost/PhpProject3/index.php")
            }
        </script>
    </body>
</html>

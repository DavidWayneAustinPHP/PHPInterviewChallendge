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
    if ($sqlConnect->connect_error) 
    {
        die("Connection failed: " . $sqlConnect->connect_error);
    }
            
    // Insert the data into the SQL table
    $sql = "INSERT INTO submissions (first_name, surname, email, gender, age, message, newsletter, service ) 
            VALUES ('$firstname', '$surname', '$email', '$gender', '$age', '$message', '$newsletter', '$service')";
    if ($sqlConnect->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } 
        else 
        {
            echo "Please try enter the above information again", '<br/>';
            echo "There was an error loading the data in the database " . $sql . "<br>" . $sqlConnect->error;
        }
     
    // Clos conection to the database
    $sqlConnect->close();
    
    // Code used for testing while building the program to see data being entered
    // Could also write code here that wrote data to the console that could be used for trouble shooting
    echo '</br>', '</br>';
    echo "<b>The below is being used for testing and will be removed when project completed</b>", '<br/>';
    echo "Data that has been retrieved from the form", '<br/>';
    pre_r($_POST);
    if (isset($_POST['submit']))
    {
        echo "Testing data being read from form entry using for testing", '<br/>';
        echo "First name: ",$_POST['first_name'].'<br/>';
        echo "Last name: ",$_POST['surname'].'<br/>';
    }
    else 
        {
            echo "Something when wrong";
        }
?>

<?php
// Using this function for testing to view formated data being written to the database
function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>


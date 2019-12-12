<!DOCTYPE html>
<!--
Task is to build a PHP, a form library from scratch.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <title>PHP Interview Challenge</title>
    </head>
    <body>
        <h1>PHP Interview Challenge</h1>
        <strong>Please enter the below information and press submit</br></strong>
        </br>
        <table boarder=0" cellspacing="20">
            <form action="" method="POST"  >
                <input type="hidden" name="sid" value="1">
                <tr>
                    <td><p><label for="first_name">First name: </label></p></td>
                    <td><p><input type="text" name="first_name" value="" required></p></td>
                </tr>
                <tr>
                    <td><p><label for="surname">Last name: </label></p></td>
                    <td><p><input type="text" name="surname" value="" required></p></td>
                </tr>
                <tr>
                    <td><p><label for="email">Email address: </label></p></td>
                    <td><p><input type="email" name="email" value="" required></p></td>
                </tr>    
                <tr>    
                    <td><p><label for="gender">Gender: </label></p></td>
                        <td><p><select name="gender">
                            <option value="male">Male
                            <option value="female">Female
                            <option value="other">Other
                        </select></p></td>
                </tr>
                    <label for="age">Age</label><input type="text" name="age" value="" required></p>
    
                <p><label for="message">Message</label><input type="text" name="message" value=""></p>
                
                <p><label for="newsletter">Newsletter required</label>
                    <input type="checkbox" name="newsletter" value="1">Opt-In
                    <input type="checkbox" name="newsletter" value="0" checked >Opt-Out</p>
                
                <p><label for="service">Service required</label>
                    <input type="radio" name="service" value="development" checked>Development
                    <input type="radio" name="service" value="design" >Design
                    <input type="radio" name="service" value="optimisation" >Optimisation
                    <input type="radio" name="service" value="paid search" >Paid Search</p>
                
                <input type="submit" name="submit" value="Submit">
                <br/>
            </form>
        </table>

            <?php require_once 'PHPFunctions.php' ?>

        
     </body>
</html>



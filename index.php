<!DOCTYPE html>
<!--
Task is to build a PHP, a form library from scratch.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>PHP Interview Challenge</title>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>PHP Interview Challenge</h1>
            <strong>Please enter the below information and press submit</br></strong>
        </div>

        <div class="container">
            <div class="row">
                <form id="PHPform" action="PHPFunctions.php" method="POST" >
                    <div class="col-sm-4">
                        <table boarder="1">

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
                            <tr>
                                <td><p><label for="age">Age: </label></p></td>
                                <td><p><input type="text" name="age" value="" required></p></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <table boarder="1">
                            <tr>
                                <td><label for="newsletter">Newsletter required: </label>
                                    <p><input type="checkbox" name="newsletter" value="1" id="newsletterIn">Opt-In<br/></p>
                                    <p hidden><input type="checkbox" name="newsletter" value="0" id="newsletterOut" checked >Opt-Out</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="service">Service required</label>
                                    <p><input type="radio" name="service" value="development" checked>Development<br/>
                                        <input type="radio" name="service" value="design" >Design<br/>
                                        <input type="radio" name="service" value="optimisation" >Optimisation<br/>
                                        <input type="radio" name="service" value="paid search" >Paid Search</p>
                                </td>
                            </tr>
                    </div>    
            </div>
        </table>
    </div>
</form>

<div class="col-sm-4">
    <table boarder="1">
        <tr>
            <td><label for="message">Message: </label>
                <p><textarea rows="4" cols="38" name="message" form="PHPform" required></textarea></p>
            </td>
        </tr>
    </table>
</div>
</div>
</div>

<div class="container">
    <p><input type="submit" name="submit" value="Submit" form="PHPform" onclick="checkNewsletter()"></p>
</div>

<script>
    function checkNewsletter()
    {
        if (document.getElementById("newsletterIn").checked === false)
        {
            document.getElementById("newsletterOut").checked = true;
        }
        document.getElementById("PHPform").submit();
    }
</script>

</body>
</html>



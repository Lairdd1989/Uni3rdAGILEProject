

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>My Dundee Portal</h1>


        <form action="Login.php" method="post">


            <table> 
                <tr>
                    <td>Email: <input id="email" name="email" type="text" onblur="validateLoginForm()"></td>
                </tr>
                <tr>
                    <td>Password: <input id="password" name="password" type="password" onblur="validateLoginForm()"></td>
                </tr>
            </table>      
            <input id="submit" type="Submit" value="Login">

        </form>
        <p id="validationStatus"></p>


    </body>
</html>








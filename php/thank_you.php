<html>

    <head>
        <title>Thank you Page</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <div>
            <h3>Thank you for Registering!</h3>

            <table>
                <tr>
                    <thead>Thank you for Registering!</thead>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><?php echo ucfirst($_POST['fname'])?> </td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><?php echo ucfirst($_POST['lname'])?> </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><?php echo $_POST['addr']?> </td>
                </tr>
                <tr>
                    <td>State: </td>
                    <td><?php echo $_POST['state']?> </td>
                </tr>
                <tr>
                    <td>Zip: </td>
                    <td><?php echo $_POST['zip']?> </td>
                </tr>
                <tr>
                    <td>Telephone: </td>
                    <td><?php echo $_POST['tele']?> </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $_POST['email']?> </td>
                </tr>
            </table>
        </div>

    </body>

</html>
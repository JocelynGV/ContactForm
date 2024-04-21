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
			<?php 
				$myFName = $_POST['fname'];
				$myLName = $_POST['lname'];
				$myAddr = $_POST['addr'];
				$myState = $_POST['state'];
				$myZip = $_POST['zip'];
				$myTele = $_POST['tele'];
				$myEmail = $_POST['email'];
				// Open the file in append mode
				$myfile = fopen("../contacts.txt", "a") or die("Unable to open file!");
				
				// Write data to the file
				fwrite($myfile, ucfirst($myFName) . ",");
				fwrite($myfile, ucfirst($myLName) . ",");
				fwrite($myfile, ucfirst($myAddr) . ",");
				fwrite($myfile, ucfirst($myState) . ",");
				fwrite($myfile, ucfirst($myZip) . ",");
				fwrite($myfile, ucfirst($myTele) . ",");
				fwrite($myfile, $myEmail . "\n");  // Add newline after each entry
				
				// Close the file handle
				fclose($myfile);
			?>
        </div>

    </body>

</html>
<head>
    <title>Existing Contacts</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="flex-container">
        <h1>Existing Contacts</h1>

        <table id="existing-contact-table">
        <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Telephone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $myfile = fopen("../contacts.txt", "r") or die("Unable to open file!");

                $lines = [];

                // Read the file line by line and store each line in an array
                while (!feof($myfile)) {
                    $line = fgets($myfile);
                    if (trim($line) !== "") {
                        $lines[] = $line;
                    }
                }

                for ($i = count($lines) - 1; $i >= 0; $i--) {
                    $entry = preg_split("/,/", $lines[$i]);
                    // if ($i % 2 == 0) {
                    //     echo "<tr class='white'>";
                    // } else {
                        echo "<tr>";
                    // }
                        for ($j = 0; $j < count($entry); $j++) {
                            echo "<td>" . $entry[$j] . "</td>";
                        }
                    echo "</tr>";
                }

                fclose($myfile);

            ?>
    </tbody>
        </table>


        <a href="../index.html">Return to Main Page</a>
    </div>

    <script src="../js/view-contacts-php.js"></script>

</body>
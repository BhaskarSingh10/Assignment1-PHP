<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students of CMPG</title>
    <!-- Add your CSS styles or link to an external stylesheet here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">Student Association </div>
        <nav>
            <ul>
                <li><a href="Studentinfo.php"> Student Info</a></li>
                <li><a href="viewstudentinfo.php">View student Info</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Students Information</h1>
        <?php
//Database Connectivity
            $servername="localhost";
            $username="root";
            $password="";
            $database="testdb";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                echo "Connection Sucessfull";
            }

            $sql="SELECT * FROM `students`";
            $result=mysqli_query($conn, $sql);

            //Find the number of records in the table
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;

            //Display the records using if statement

            if($num>0)
            {
                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
                echo "<br/>";

                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
            }
            
            //display records using while statement

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<br/>";
                echo "Here is the records in the Table";
                echo "<br/>";

                echo "First Name: " . $row['Fname'] . "  ID: " .$row['ID'] ;
                echo "<br/>";
            }

            


?>
</main>

<footer>
    &copy; StudentAssociation GeorgianILAC
</footer>
</body>
</html>

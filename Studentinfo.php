<!doctype html>
<html lang="en">
    <head>
        <title>Student Information</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
        <div class="logo">Student Association</div>
        <img src="Screenshot 2023-10-11 210346.png" alt="Logo" class="logo-image">

        <nav>
        <ul>
        <li><a href="viewstudentinfo.php">View student Info</a></li>
        </ul>
        </nav>
    </header> 

    <main>
        <h1>Student Information</h1>
        <form action="C:\xampp\htdocs\Assignment1 PHP" method="post">
            <label for="fname">Full name</label>
            <input type="text" name="fname" id="fname"><br/>
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br/>
            
            
            <button type="submit">SUBMIT</button>
        </form>
        
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        if($_SERVER['REQUEST_METHOD'] ='POST')
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $id=$_POST['id'];
             
            //Database Connectivity
            $servername="localhost";
            $username="root";
            $password="1234";
            $database="Studentinfo";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                //submit the insertion queries/data to database
               $sql= "INSERT INTO `students` (`fname`,  `id`) VALUES (`$fname`, `$id`)";
                $result=mysqli_query($conn,$sql);

                if($result)
                {
                    echo "Data inserted successfully";

                }
                else{
                    echo "Data not inserted due to  ".mysqli_error($conn);
                }
            }

        }



        ?>
        </main>
        <footer>
        &copy; StudentAssociation GeorgianILAC
    </footer>
    </body>
</html>



    
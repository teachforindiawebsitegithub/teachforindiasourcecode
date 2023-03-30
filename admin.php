<!--Code to redirect user if not logged in-->

<?php session_start();

if(!isset($_SESSION['uname'])){
    header('location:login.html');
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <title>Teach For India</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="A Dummy Website For Teach For India" />
    <link rel="stylesheet" type="text/css" href="admin.css" />
    <link rel="icon" type="image/x-icon" href="/Images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">


</head>

<body>

<!--Code For Navbar-->

    <nav class='NavBar'>

        <!--Navbar Logo-->

        <div class='LogoText'>
            <a>TEACH <span>FOR</span> INDIA</a>
        </div>

        <!--Navbar Logo Image-->

        <div class='LogoImg'>
            <img src="Images/LogoImg.png" alt="Teach For India. Logo" />
        </div>

        <!--Navbar Responsive Menu Icon-->

        <div class="Menu">
            <img src="Images/List.png" alt="Menu" />
        </div>

        <!--Navbar Responsive Menu Closing Icon-->

        <div id="close">
            <img src="Images/close.png" alt="close" />
        </div>

        <!--Navbar Logout button-->

        <div class="button">
            <a class="logout" href="logout.php">Logout</a>
        </div>

        <!--Navbar Responsive Logout button-->

        <div id="Navmob">
            <a id="logoutmob"href="logout.php">Logout</a>
        </div>

    </nav>

    <header>

    <!--Main body to display data-->

        <div id="adminpanel">
          
                <table>

                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Language</th>
                            <th>Class Day</th>
                        </tr>
                    </thead>

                    <tbody>

                    <!--Code to display data-->
                        <?php
                        
                        $conn = new mysqli('localhost','id20529064_admin','5{3K(Z[>I[3{B%e4','id20529064_teachforindia');
                        $sql = "SELECT * FROM registration";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0){
                        
                        while($row = $result->fetch_assoc()){
                        
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . $row["language"] . "</td><td>" . $row["day"] . "</td></tr>";
                        
                        }
                        
                        }
                        
                        else{
                        echo "No Results";}
                        
                        $conn->close();
                        
                        ?>
                    </tbody>

                </table>

        </div>

    </header>


    <footer>
        <div id="footer">
            
            <div class='LogoText'>
                <a>TEACH <span>FOR</span> INDIA</a>
            </div>

            <div>
                <a href="https://www.facebook.com/teachforindia" target=”_blank”><img src="Images/facebook.png" alt="facebook"></a>
                <a href="https://twitter.com/TeachForIndia" target=”_blank”><img src="Images/twitter.png" alt="twitter"></a>
            </div>
    
            <div><p>© 2023 TEACH TO LEAD   |   ALL RIGHTS RESERVED</p></div>

        </div>
    </footer>

    <script src="script.js"></script>

</body>

</html>
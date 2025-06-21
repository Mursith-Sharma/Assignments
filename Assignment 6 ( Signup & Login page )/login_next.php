<?php

include("config.php");

session_start();

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($name)) 
    {
        header("Location: login.php?error=Please enter your username");     // Username காலியாக இருந்தால், login.php-க்கு redirect செய்யும்,
    }else if(empty($password))                                              //  URL-ல் error=username is required என்று சென்ட் செய்யும்.🔁 exit() மூலம் PHP execution நிறுத்தப்படுகிறது.
    {
        header("Location: login.php?error=Please enter your password");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
        $result = mysqli_query($mysqli, $sql);

        if(mysqli_fetch_assoc($result))
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: what.php");
            exit(); 
        } 
        else
        {
            header("Location: login.php?error=Invalid username or password");
            exit();
        }
    }
}

?>



<!-- 
login pannumpothu login il ullla detail aanathu temperory aaga oru file il irukkum athuthan session.ithu brwoser il cookies aaha semikkapatirukkum. 
pin database ilirunthu data intha file kku vanthu 2ium marge panni paakum. 
sariyayin login panna permission kidaikum. pilaiyayin permission varathu
-->
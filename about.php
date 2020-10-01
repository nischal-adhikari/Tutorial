<?php
include 'includes/header.php';
?>

<br>
<br>

<h3>This is the about section of web page and here lies the main content.</h3>

<br> <br>
<?php
if(!isset($_COOKIE [$cookie_name]))
    {
        echo "Cookie name not set";
    }
else
     {
        echo "Cookie". $cookie_name. " is set";
        echo " and the value is ".$cookie_value;
     } 
     
if(!isset($_SESSION["user_id"]))
    {
        echo "<br> <h4>You are not currently authenticated</h4>";
    }
else
    {
        echo "<br> <h4> Session is available and you are logged in as  </h4>" .$_SESSION["user_id"];
    }

?>
<br> <br>



<?php
include 'includes/footer.php';
?>
<?php

include 'includes/header.php';


?>

<form action="config/insert_in_db.php"  method="post">

<br><br><br>

<label >Title: <input type="text" name="titlee"></label>
<br><br>
<label >Content: <input type="text" name="contenttt" ></label>
<br><br>

<button type="submit" name ="submit">Create Blog</button>

</form>







<?php

include 'includes/footer.php';






?>
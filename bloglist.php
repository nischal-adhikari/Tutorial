<?php

include_once 'config/db_conn.php';

include 'includes/header.php';


?>
<br><br><br><br><br><br><br>

<h3>this is the blog section of web</h3>

<br><br><br><br><br><br><br>



<h3 ><a href="addblog.php"> Create New Blog</a></h3>

<?php

$sqlquery= "SELECT * FROM blog;";

$data = mysqli_query($conn, $sqlquery);

foreach($data as $unitdata): ?>
<h3> 

<?php
       echo $unitdata ['id']; ?>

</h3>


<div style="border:2px solid black; background-color:gray">
<h1> 

<?php
       echo $unitdata ['title']; ?>

</h1>

<p> 

<?php
       echo $unitdata ['contenttt']; ?>

</p>

<a href="#">Read More</a>


</div>



<?php  

endforeach;

?>







<?php

include 'includes/footer.php';






?>
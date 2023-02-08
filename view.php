<?php
session_start();

echo $_SESSION["folder"];


?>

<iframe src="<?php echo $_SESSION["folder"]; ?>" width="90%" height="500px"></iframe>
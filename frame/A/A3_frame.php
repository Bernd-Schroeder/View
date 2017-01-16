<?php
session_start();

// Password reset frame
require_once('../../frame/path.php');
$path = new path();

if(isset($_SESSION['A_frame_base']) AND isset($_SESSION['last_frame']))
{
$_SESSION['previous_last_frame']    = $_SESSION['last_frame'];
$_SESSION['last_frame']    = $path->get_frame();

require_once('../../view/A3_view.php');
$A_view = new A3_view();
echo $A_view->get_representation();
}
else
{
header("Location:" . $path->get_start_frame());
exit;
}
?>
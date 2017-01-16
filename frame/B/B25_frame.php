<?php
session_start();

// 25 contact form
require_once('../../frame/path.php');
$path = new path();

if(
(isset($_GET["ni:be!:lu:jo!mem"]) && is_numeric($_GET["ni:be!:lu:jo!mem"])) AND
( isset($_SESSION['watch_id'])) AND
( isset($_SESSION['online']) && ( $_SESSION['online'] == TRUE ))
)
{
$_SESSION['watched_id'] = htmlspecialchars( $_GET["ni:be!:lu:jo!mem"] );
$_SESSION['previous_last_frame']    = $_SESSION['last_frame'];
$_SESSION['last_frame']    = $path->get_frame();
require_once('../../view/B25_view.php');
$member_view = new B25_view();
echo $member_view->get_representation();
}
else
{
header("Location:" . $path->get_start_frame());
exit;
}
?>

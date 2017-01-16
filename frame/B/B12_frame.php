<?php
session_start();

//12  upload document data
require_once('../../frame/path.php');
$path = new path();

if(
(isset($_GET["ni:be!:lu:jo!mem"]) && is_numeric($_GET["ni:be!:lu:jo!mem"])) AND
( isset($_SESSION['watch_id'])) AND
( isset($_SESSION['online']) && ( $_SESSION['online'] == TRUE ))
)
{
$_SESSION['watched_id'] = htmlspecialchars( $_GET["ni:be!:lu:jo!mem"] );
$_SESSION['last_frame']    = $path->get_frame();
require_once('../../view/B12_view.php');
$member_view = new B12_view();
echo $member_view->get_representation();
}
else
{
header("Location:" . $path->get_start_frame());
exit;
}
?>
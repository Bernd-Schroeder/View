<?php
session_start();

// 37 show all comments to an article
require_once('../../frame/path.php');
$path = new path();

if(
(isset($_GET["lu:jo!:ni:be!ev"]) && is_numeric($_GET["lu:jo!:ni:be!ev"])) AND
( isset($_SESSION['watch_id'])) AND
( isset($_SESSION['online']) && ( $_SESSION['online'] == TRUE ))
)
{
$_SESSION['watched_id'] = htmlspecialchars( $_GET["lu:jo!:ni:be!ev"] );
$_SESSION['last_frame']    = $path->get_frame();
require_once('../../view/D37_view.php');
$event_view = new D37_view();
echo $event_view->get_representation();
}
else
{
header("Location:" . $path->get_start_frame());
exit;
}
?>
<?php
session_start();

// 26 Suche ( Team )
require_once('../../frame/path.php');
$path = new path();

if(
(isset($_GET["be:ni!:jo:lu!te"]) && is_numeric($_GET["be:ni!:jo:lu!te"])) AND
( isset($_SESSION['watch_id'])) AND
( isset($_SESSION['online']) && ( $_SESSION['online'] == TRUE ))
)
{
$_SESSION['watched_id'] = htmlspecialchars( $_GET["be:ni!:jo:lu!te"] );
//$_SESSION['last_frame']    = $path->get_frame();
require_once('../../view/C26_view.php');
$team_view = new C26_view();
echo $team_view->get_representation();
}
else
{
header("Location:" . $path->get_start_frame());
exit;
}
?>

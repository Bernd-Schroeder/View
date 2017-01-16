<?php
session_start();

// start frame
require_once('../../frame/path.php');

$path = new path();
$frame_base = $path->get_frame_base();
$frame = $path->get_frame();

if(isset($_GET["domain"]) && is_string($_GET["domain"]))
{ $_SESSION['domain'] = $_GET["domain"]; } 
else
{ $_SESSION['domain'] = "3appy"; }

$_SESSION['control_base_X']       = $frame_base . "/control/";

$_SESSION['A_frame_base']       = $frame_base . "/view/frame/A/";
$_SESSION['B_frame_base']       = $frame_base . "/view/frame/B/";
$_SESSION['C_frame_base']       = $frame_base . "/view/frame/C/";
$_SESSION['D_frame_base']       = $frame_base . "/view/frame/D/";

$_SESSION['A_control_base']     = $frame_base . "/control/A/";
$_SESSION['B_control_base']     = $frame_base . "/control/B/";
$_SESSION['C_control_base']     = $frame_base . "/control/C/";
$_SESSION['D_control_base']     = $frame_base . "/control/D/";
$_SESSION['basic_control_base'] = $frame_base . "/control/basic/";
$_SESSION['file_control_base']  = $frame_base . "/control/file/";

$_SESSION['data_base']          = $frame_base . "/data/";
$_SESSION['user_data']          = $frame_base . "/user_data/";
$_SESSION['view_base']          = $frame_base . "/view/view/";
$_SESSION['images']             = $frame_base . "/view/view/images/";
$_SESSION['icons']              = $frame_base . "/view/view/images/icons/";
$_SESSION['carousel']           = $frame_base . "/view/view/images/carousel/";
$_SESSION['languages']          = $frame_base . "/view/view/language/";
$_SESSION['last_frame']         = $frame;

if(isset($_GET["goal"]) && is_string($_GET["goal"]))
{ 
$next_frame = $_SESSION['A_frame_base'] . $_GET["goal"] . "_frame.php";
header("Location:" . $next_frame );
}
else
{
require_once('../../view/a_view/class.a0_view.php');
$A0_view = new A0_view();
echo $A0_view->get_representation();
}
?>
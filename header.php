<?php
$document_root = explode ("/", $_SERVER['PHP_SELF']); //Array current url
$document_root_cr = $_SERVER['DOCUMENT_ROOT'] ."/". $document_root[1]; //Current root folder parent
include_once ("inc/function.php");
?>

<?php
$title_web = "Tìm ngày của tuần - Tìm ngày nếu đã có Thứ, Tuần, Tháng: Mothers Day, Fathers Day, Grandparents Day,...";
$description = "Get day of week and month - Tìm ngày Mothers Day, Fathers Day, Grandparents Day";
$keywords = "";
$news_keywords = "";
$favicon = "";
?>

<?php
$insert_head = '
	<link rel="stylesheet" type="text/css" href="inc/style.css'.$ver.'" />
';
$insert_foot = '';
$body_class = "tim-ngay-dac-biet";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_web; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <link href="<?php echo $favicon; ?>" rel="shortcut icon" type="image/x-icon">
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="news_keywords" content="<?php echo $news_keywords; ?>" />
    <meta name="robots" content="index,follow,noodp,noydir"/>
    <?php echo $insert_head; ?>
</head>
<body class="<?php echo $body_class; ?>">
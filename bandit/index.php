<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php echo Theme::metaTagTitle(); ?>
<?php echo Theme::metaTagDescription(); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>
<?php echo Theme::css('css/bs.css'); ?>
<?php echo Theme::css('css/bandit.css'); ?>
<?php Theme::plugins('siteHead'); ?>
<meta name="generator" content="Bludit">
</head>
<body>
<?php Theme::plugins('siteBodyBegin'); ?>
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<?php if ($WHERE_AM_I == 'page') {
include(THEME_DIR_PHP.'page.php');
} else {
include(THEME_DIR_PHP.'home.php');
} ?>
php include(THEME_DIR_PHP.'footer.php'); ?>
<?php Theme::plugins('siteBodyEnd'); ?>
<?php echo Theme::js('js/bs.js'); ?>
	</body>
</html>

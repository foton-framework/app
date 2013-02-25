<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Title</title>

	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?=$this->template_folder() ?>/favicon.ico" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$this->template_folder() ?>/css/main.css" />

	<!-- JS -->
	<script type="text/javascript" src="<?=$this->template_folder() ?>/js/common.js"></script>
</head>
<body>

<?=$this->admin->admin_panel() ?>

<?=$content ?>



<?= FF_DEVMODE ? ext('debug')->render_log(true) : NULL ?>

</body>
</html>
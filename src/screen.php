<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<style type="text/css">
		body {
			font-family: arial;
			text-align: center;
			background-color: <?= $bgcolor ?>
		}
		#maintenance-img {
			width: 100%;
			max-width: 400px;
		}
	</style>
	<?php if ($css): ?>
	<link rel="stylesheet" type="text/css" href="<?= $css ?>">	
	<?php endif; ?>
</head>
<body>
	<p id="maintenance-msg"><?= $text ?></p>
	<?php if ($path_img): ?>
	<img id="maintenance-img" src="<?= $path_img ?>">
	<?php endif; ?>
</body>
</html>
<?php
include_once 'a_conect.php';
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>СЕМЬЯНИКА!</title>
	<meta name="description" content="Сайт знакомств для создания семьи!" />
	<meta name="keywords" content="семья, союз, брак, встречи" />
	
	<meta name="yandex-verification" content="e3e410068b9b0f63" />
	
	<?include_once 'site_files/head.php';?>
	<style type="text/css">
		@media (min-width: 700px) {
		nav a:first-child, nav#fixed a:first-child {
			border-bottom: 3px solid rgba(255,235,59);
		}} 
	</style>
</head>
<body>
	<header>
		<?include_once 'site_files/header.php';?>
	</header>
	
	<nav>
		<?include_once 'site_files/nav.php';?>
	</nav>
	<div id="slideMenu">Моё)</div>
	<div id="wrapper">
		<div id="TopCol">		
			<?include_once 'site_files/wrapper-topCol.php';?>
		</div>
		<div id="leftCol">		
			<?include_once 'site_files/wrapper-leftCol.php';?>
		</div>
		<div id="rightCol">
			<?include_once 'site_files/wrapper-rightCol.php';?>
		</div>
	</div>
	<footer>
		<?include_once 'site_files/footer.php';?>
	</footer>
</body>
</html>
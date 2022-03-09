	<!-- имя автора документа -->
	<meta name="author" content="Огънеяръ" />
	<!-- управление роботами -->
	<meta name="robots" content="all,index,follow" />
	<!-- читательская аудитория документа (global - публичный документ) -->
	<meta name="distribution" content="global" />
	<!-- возрастной рейтинг (General - общая категория) -->
	<meta name="Rating" content="General">
	<!-- статус документа (Dynamic - для изменяющихся документов) -->
	<meta name="Document-state" content="Dynamic">
	
	<!-- Adopt website to current screen -->
	<meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1.0">
		
	<meta http-equiv="Cache-Control" content="no-cache">
	
	<link rel="stylesheet" href="/css/style2.css">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/site.webmanifest">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="msapplication-config" content="/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Here we add libs for jQuery, Ajax... -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	
	<!-- reCAPTCHA -->
	<script src="https://www.google.com/recaptcha/api.js?render=6LfQ4rIZAAAAAE0Fuv294UR55S8IYXKXciVt28_C"></script>
	
	
	<script type="text/javascript">
		if(screen.width > 300) { // Animate navigation
			$(document).ready(function() {
			// функцию скролла привязать к окну браузера
				$(window).scroll(function(){
					var distanceTop = $('#slideMenu').offset().top;
					if ($(window).scrollTop() >= distanceTop)
						$ ('nav').attr ("id", "fixed");
					else //if ($(window).scrollTop() < distanceTop)
						$ ('nav').attr ("id", "nav");
				});
			});
		}
	</script>	
	
	
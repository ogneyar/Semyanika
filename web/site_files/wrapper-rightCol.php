<article>
	<br>
	<center>
	<h3><span>Страницы!</span></h3>	
	<h3><br><br>
		<a href='/obzor_meropriyatiy/index.php' title='Обзор мероприятий'>
			Обзор мероприятий
		</a>
	</h3>
	<h3><br><br>
	<a href='/poryadok_meropriyatiy/index.php' title='Порядок мероприятий'>
		Порядок мероприятий
	</a>
	</h3>
	<h3><br><br>
		<a href='/sotrudnichestvo/index.php' title='Сотрудничество'>
			Сотрудничество
		</a>
	</h3>
	<h3><br><br>
		<a href='/partneri/index.php' title='Наши партнеры'>
			Наши партнеры
		</a>
	</h3>
	<h3><br><br>
		<a href='/sovet-da-lubov/index.php' title='Совет-да-любовь'>
			Совет-да-любовь
		</a>
	</h3>
	</center>
	<br>
</article>

<article>
	<br>
	<form action="/zayavki/znakomstvo.php" align="center">
		<input type="submit" class="button" name="znakomstvo" id="znakomstvo" value="Заявка на знакомство">
	</form>
	
	<img src="/img/kolca.png" />
	
	<form action="/zayavki/send_message.php" align="center">
	<input type="submit" class="button" name="send_message" id="send_message" value="Отправить сообщение">
	</form>	
	<br>
</article>


<article>
	<a href='' title=''>
		<img src="/img/art/7yanika.jpg" />
	</a>
	<center>
	<h3><span>Здесь может быть Ваша реклама!</span></h3>
	</center>
	<br>
</article>

<article>
<center>

	<br>
	<h3><span>Поддержать проект:</span></h3><br>

	<article class="tooltip">	
		<!--<h4>-->
		<h4><span>Карта сбербанка</span></h4>
		<input type="text" value="6390 0252 9029 3032 12" id="myInput" onclick="myFunction('myInput')" onmouseout="outFunc()" readonly>
		
		<br><br>
		
		<h4><span>По номеру тел.</span></h4>
		<input type="text" value="8 918 577 00 09" id="myInput2" onclick="myFunction('myInput2')" onmouseout="outFunc()" readonly>
		<!--</h4>-->
		
		<br><br>
		
		<span class="tooltiptext" id="myTooltip">Нажмите чтобы копировать текст в буфер</span>
	</article>
	
</center>
</article>

<script>
function myFunction(myIn) {
  var copyText = document.getElementById(myIn);
  copyText.select();
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Скопировал: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Нажмите чтобы копировать текст в буфер";
}
</script>


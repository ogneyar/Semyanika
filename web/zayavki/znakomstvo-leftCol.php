<article id="znakomstvo">
<div>

<center>

<h3>
Подача заявки на знакомство. 
</h3>

	<h4>
		<form action="podtverjdenie.php" method="post" enctype="multipart/form-data">
		
		<br>		
			<input type="hidden" name="zayavka" id="zayavka" value="Да">
			<input type="hidden" name="token" id="token">
			<input type="hidden" name="action" id="action">
			
			<label>Введите Ваше имя: <font color="red">*</font><br></label>			
			<input type="text" placeholder="Введите имя..." name="imya" id="imya" size="15" maxlength="100">
		<br><br>
		
			<label>Укажите дату рождения: <font color="red">*</font><br></label>
			<input type="text" placeholder="Ваш возраст..." name="vozrast" id="vozrast" size="15" maxlength="100">
		<br><br>	
				
			<label>Место проживания: <font color="red">*</font><br></label>
			<input type="text" placeholder="Населённый пункт..." name="projivanie" id="projivanie" size="20" maxlength="1000">
		<br><br>	
		
			<label>Ваше образование:<br></label>
			<input type="text" placeholder="Образование..." name="obrazovanie" id="obrazovanie" size="20" maxlength="200">
		<br><br>	
			
			<label>Профессия, род деятельности:<br></label>
			<input type="text" placeholder="Профессия..." name="profesiya" id="profesiya" size="20" maxlength="200">
		<br><br>	
		
			<label>Дети, их пол и возраст:<br></label>
			<textarea placeholder="Дети есть?..." rows="5" cols="25" name="deti" id="deti"></textarea>
		<br><br>	
		
			<label>Возможен ли переезд?<br></label>
			<input type="text" placeholder="Возможен ли?..." name="pereezd" id="pereezd" size="15" maxlength="100">
		<br><br>
		
			<label>Укажите данные для связи с Вами (телефон, email, соц.сеть): <font color="red">*</font><br></label>
			<input type="text" placeholder="Телефон, email..." name="dannie" id="dannie" size="20" maxlength="200">
		<br><br>
		
			<label>Загрузите фото (нужен фотопортрет без солнцезащитных очков и в полный рост): <font color="red">*</font><br></label>
			<input type="file" name="file" id="file" accept=".jpg, .jpeg, .png">	
		<br><br> 
		
			
			<input type="submit" class="button" name="done" id="done" value="Отправить">
		<br>
		
		</form>
	</h4>

</center>	
	
</div>
</article>

<script>
        let captcha_action = 'add_comment';
     
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfQ4rIZAAAAAE0Fuv294UR55S8IYXKXciVt28_C', {action: captcha_action})
                .then(function(token) {
                    if (token) {
                        document.getElementById('token').value = token;
                        document.getElementById('action').value = captcha_action;
                    }
                });
        });
</script>

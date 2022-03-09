<article id="send_message">
<div>

<center>

<h3>
Отправка сообщения.
</h3>	

	<h4>
		<form action="podtverjdenie.php" method="post" enctype="multipart/form-data">
		
		<br>		
			<input type="hidden" name="message" id="message" value="Да">
			<input type="hidden" name="token" id="token">
			<input type="hidden" name="action" id="action">
			
			<label>Напишите сообщение, укажите данные для связи с Вами (телефон, email, соц.сеть):<br></label>
			<textarea placeholder="Ваше сообщение..." rows="5" cols="25" name="msg" id="msg"></textarea>
		<br><br>	
		
			<input type="submit" class="button" name="done2" id="done2" value="Отправить">
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

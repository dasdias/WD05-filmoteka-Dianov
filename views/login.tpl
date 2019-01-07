<h1 class="text-center">Вход для администратора</h1>
<div class="row justify-content-center">
	<div class="col-6">
		<form action="login.php" method="POST" class="mb-40">
			<div class="form-group">
				<label class="label-title">Логин
					<input class="input" type="text" placeholder="" name="login"/>
				</label>
			</div>
			<div class="form-group">
				<label class="label-title">Пароль
					<input class="input" type="password" placeholder="" name="password"/>
				</label>
			</div>
			<div class="form-group">
				<label class="label-title">Ваш город
					<input class="input" type="text" placeholder="" name="user-city"/>
				</label>
			</div>
			<div class="mt-20">
				<input type="submit" class="button" value="Вход" name="enter">
			</div>
		</form>
		<form action="unset-cookie.php" method="POST">
			<input type="submit" class="button" value="Удалить данные" name="user-unset">
		</form>


		<!-- <form action="unset-cookie.php" method="POST">
			<input type="submit" class="button" value="Удалить данные" name="user-unset">
		</form> -->
	</div>
</div>



<h1 class="text-center">Укажите ваши данные</h1>
<div class="row justify-content-center">
	<div class="col-6">
		<form action="set-cookie.php" method="POST" class="mb-40">
			<div class="form-group">
				<label class="label-title">Ваше имя
					<input class="input" type="text" placeholder="" name="user-name"/>
				</label>
			</div>
			<div class="form-group">
				<label class="label-title">Ваш город
					<input class="input" type="text" placeholder="" name="user-city"/>
				</label>
			</div>
			<div class="mt-20">
				<input type="submit" class="button" value="Сохранить" name="user-submit">
			</div>
		</form>


		<form action="unset-cookie.php" method="POST">
			<input type="submit" class="button" value="Удалить данные" name="user-unset">
		</form>
	</div>
</div>



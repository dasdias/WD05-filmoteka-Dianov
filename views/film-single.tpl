<h1 class="title-1">Информация о фильме</h1>

<div class="card mb-20">
	<div class="card__header">
		<h4 class="title-4"><?=$film['title']?></h4>
		<div class="buttons">
			<a href="edit.php?id=<?=$film['id']?>" class="button button--editsmall">Редактировать</a>
			<a href="index.php?action=delete&id=<?=$film['id']?>" class="button button--removesmall">Удалить</a>
		</div>
	</div>
	<div class="badge"><?=$film['genre']?></div>
	<div class="badge"><?=$film['year']?></div>
	<div class="user-content">
		<p><?=$film['description']?></p>
	</div>
</div>

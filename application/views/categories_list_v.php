<link rel="stylesheet" href="/sources/css/stylesheet.css">
<?php $counter = 0;?>
<h3>Таблица Категорий</h3>
<table>
	<tr>
		<th>#</th>
		<th>ИД категории</th>
		<th>Категория товара</th>
		<th>Категория наценки</th>
		<th>Вознаграждение</th>
	</tr>
	<?php foreach($query as $value) : ?>
	<tr>
		<td><?php echo ++$counter;?></td>
		<td><?php echo $value->id;?></td>
		<td><?php echo $value->category;?></td>
		<td><?php echo $value->marginality?></td>
		<td><?php echo $value->remuneration;?></td>
		<td><a href="/main/editcategory/<?php echo $value->id?>" id="<?php echo $value->id?>">Edit</a> <a href="/main/deletecategory/<?php echo $value->id?>">Delete</a></td>
	</tr>
	<?php endforeach; ?>
</table>

<a href='/main'>Вернуться на главную</a>
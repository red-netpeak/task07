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
	<?php var_dump($query); //foreach($result as $value) {?>
	<tr>
		<td><?php echo ++$counter;?></td>
		<td><?php //echo $value->product;?></td>
		<td><?php //echo $value->category;?></td>
		<td><?php //echo $value->image?></td>
		<td><?php //echo $value->color;?></td>
		<td><a href="/main/editproduct/<?php //echo $value->id?>" id="<?php //echo $value->id?>">Edit</a> <a href="/main/deleteproduct/<?php //echo $value->id?>">Delete</a></td>
	</tr>
	<?php //}?>
</table>
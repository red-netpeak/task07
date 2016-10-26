<link rel="stylesheet" href="/sources/css/stylesheet.css">
<?php $counter = 0;?>
<h3>Таблица товаров</h3>
<table>
	<tr>
		<th>#</th>
		<th>Товар</th>
		<th>Категория товара</th>
		<th>Изображение</th>
		<th>Цвет</th>
		<th>Вес</th>
		<th>Цена</th>
		<th>Скидка</th>
		<th>Действие</th>
	</tr>
	<?php foreach($result as $value) {?>
	<tr>
		<td><?php echo ++$counter;?></td>
		<td><?php echo $value->product;?></td>
		<td><?php echo $value->category;?></td>
		<td><img src="<?php echo $value->image?>" alt='image'></td>
		<td><?php echo $value->color;?></td>
		<td><?php echo $value->weight;?>кг</td>
		<td><?php echo $value->price?>грн</td>
		<td><?php if ($value->sale) echo $value->sale."%"; else echo "Нет"?></td>
		<td><a href="/main/editproduct/<?php echo $value->id?>" id="<?php echo $value->id?>">Edit</a> <a href="/main/deleteproduct/<?php echo $value->id?>">Delete</a></td>
	</tr>
	<?php }?>
</table>

<div>
	<ul>
		<li><a href="/main/addcategory">Добавить категорию</a></li>
		<li><a href='/main/categorylist'>Редактировать категории</a></li>
		<li><a href="/main/addproduct">Добавить товар</a></li>
	</ul>
</div>
<h3>Добавление категории товара</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('http://codeigniter/main/addcategory'); ?>
	<input type="text" name="category" placeholder="Название категории" value="<?php echo set_value('category');?>">
	<label for="marginality">Категория наценки</label>
	<select name="marginality" id=""?>">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
	</select>
	<input name='remuneration' type="text" placeholder="Вознаграждение" value='<?php echo set_value('remuneration');?>'>
	<input name="confirm" type="submit" value="Confirm">
<?php echo form_close();?> 

<?php echo $result;?>

<a href="index">Вернуться к товарам</a>
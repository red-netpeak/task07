<h3>Редактирование категории товара</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('/editcategory'); ?>
	<input type="text" name="category" placeholder="Название категории" value="<?php echo set_value('category');?>">
	<label for="marginality">Категория наценки</label>
	<select name="marginality" id="">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
	</select>
	<input name='renumeration' type="number" placeholder="Вознаграждение" value='<?php echo set_value('category');?>'>
	<input name="confirm" type="submit" value="Confirm">
<?php echo form_close();?> 

<a href="index">Вернуться к товарам</a>
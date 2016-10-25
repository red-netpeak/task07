<?php echo validation_errors(); ?>

<h3>Добавить товар</h3>

<?php echo form_open('main/editproduct'); ?>

<input name="product" type="text" value="">
<select name="category_id" id="category">
	<?php foreach($select as $value) {?>
	<option value="<?php echo $value->id; ?>"><?php echo $value->category;?></option>
	<?php }?>
</select>
<input type="number" name="weight" value="">кг
<input type="text" value="" name="color">
<input type="text" name="price" value="">
<input type="text" name="image" value="">
<input type="text" name="sale" value="">
<input type="number" name="available" min=0 max=1 value="0">

<input type="submit" name="submit" value="Создать">
<?php echo form_close();?> 

<a href="index">Вернуться к товарам</a>
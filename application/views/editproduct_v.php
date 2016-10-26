<?php echo validation_errors(); ?>

<h3>Редактировать товар</h3>

<?php echo form_open("http://codeigniter/main/editproduct/{$select->id}"); ?>

<input name="product" type="text" value="<?php echo $select->product;?>">
<select name="category_id" id="category">
	<?php foreach($query as $value) {?>
	<option value="<?php echo $value->id; ?>"<?php if($select->category_id == $value->id) echo " selected='selected'"?>><?php echo $value->category;?></option>
	<?php }?>
</select>
<input type="number" name="weight" value="<?php echo $select->weight; ?>">кг
<input type="text" value="<?php echo $select->color;?>">
<input type="text" name="price" value="<?php echo $select->price;?>">
<input type="text" name="image" value="<?php echo $select->image;?>">
<input type="text" name="sale" value="<?php echo $select->sale;?>">
<input type="number" name="available" min=0 max=1 value="<?php echo $select->available?>">

<input type="submit" name="submit" value="Изменить">
<?php echo form_close();?> 

<a href="../index">Вернуться к товарам</a>
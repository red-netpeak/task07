<?php //echo validation_errors(); ?>

<h3>Редактировать товар</h3>

<?php echo form_open('http://codeigniter/main/editproduct'); ?>

<input name="name" type="text" value="<?php echo $query->product?>">
<select name="category" id="category">
	<?php foreach($select as $value) {?>
	<option value="<?php echo $value->id; ?>"<?php if($query->category_id == $value->id) echo " selected='selected'"?>><?php echo $value->category;?></option>
	<?php }?>
</select>
<input type="number" name="weight" value="<?php echo $query->weight; ?>">кг
<input type="text" value="<?php echo $query->color;?>">
<input type="text" name="price" value="<?php echo $query->price;?>">
<input type="text" name="image" value="<?php echo $query->image;?>">
<input type="text" name="sale" value="<?php echo $query->sale;?>">
<input type="number" name="available" min=0 max=1 value="<?php echo $query->available?>">

<input type="submit" name="submit" value="Изменить">
<?php echo form_close();?> 

<a href="../index">Вернуться к товарам</a>
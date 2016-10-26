<script src="/sources/js/script.js"></script>
<h3>Редактирование категории товара</h3>

<?php echo validation_errors(); ?>

<?php echo form_open("http://codeigniter/main/editcategory/{$query['id']}"); ?>
	<input type="text" name="category" placeholder="Название категории" value="<?php echo $query['category'];?>">
	<label for="marginality">Категория наценки</label>
	<select name="marginality" id="<?php echo $marginality_now?>">
		<?php foreach($marginality_now as $value) : ?>
			<option value="<?php echo $value?>"<?php if($value == $query['marginality']) echo "selected='selected'";?>><?php echo $value?></option>
		<?php endforeach;?>
	</select>
	<input name='remuneration' type="number" placeholder="Вознаграждение" value='<?php echo $query['remuneration'];?>'>
	<input name="confirm" type="submit" value="Confirm">
<?php echo form_close();?> 

<a href="/main">Вернуться к товарам</a>
<p><?php echo $result;?></p>
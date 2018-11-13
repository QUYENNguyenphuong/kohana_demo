<p> Create new user </p>
<br>
<form method="post" action="<?php echo URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'create'))) ?>">
<lable>User name: </lable>
<input type="text" name="username" >
<?php echo isset($errors['username']) ?  $errors['username'] : '' ?>
<br>
<label>Email: </label>
<input type="text" name="email" >
<?php echo isset($errors['email']) ?  $errors['email'] : '' ?>
<br>
<label>Phone Number: </label>
<input type="text" name="phonenumber" >
<?php echo isset($errors['phonenumber']) ?  $errors['phonenumber'] : '' ?>
<br>
<label>Bithday: </label>
<input type="date" name="date_birthday" >
<br>
<label>Hobby: </label>
<select name="hobby" >
    <?php foreach($hobbys as $key => $item): ?>
            <option name="<?= $key?>" ><?= $item ?></option>
        <?php endforeach; ?>
</select>
<br>
<input type="submit" name="btn_create" value="Create">
</form>
<a href="<?php echo URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index'))) ?>"> Home</a>

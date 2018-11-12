<p> Create new user </p>
<br>
<form method="post" action="<?php echo URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index'))) ?>">
<lable>User name: </lable>
<input type="text" name="username" >
<span class="text-danger"> <?= isset($name) ? $name : '' ?> </span>
<br>
<label>Email </label>
<input type="text" name="email" >
<span class="text-danger"> <?= isset($email) ? $email : '' ?> </span>
<br>
<input type="submit" name="btn_create" value="Create">
</form>
<a href="<?php echo URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index'))) ?>"> Home</a>
<p> Create new user </p>
<br>
<form method="post" action="">
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
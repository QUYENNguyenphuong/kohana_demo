<p> Welcome, <?= $username ?> </p>
<hr>
<form method="post" action="<?php echo URL::site(Route::get('user')->uri(array('controller'=>'user','action'=>'update','id'=>$user->id))) ?>">
    <label>User name: </label>
    <input type="text" name="username" value="<?= $user->name?>" >
    <br>
    <label>Email </label>
    <input type="text" name="email" value="<?= $user->email ?>" >
    <br>
    <input type="submit" name="btn_update" value="Update">
</form>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'index'))); ?>"> Home </a>
<br>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'create'))); ?>"> Create </a>
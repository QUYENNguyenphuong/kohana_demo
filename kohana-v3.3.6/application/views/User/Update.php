<p> Welcome, <?= $username ?> </p>
<hr>
<form method="post" action="<?php echo URL::site(Route::get('user')->uri(array('controller'=>'user','action'=>'update','id'=>$user->id))) ?>">
    <label>User name: </label>
    <input type="text" name="username" value="<?= $user->name?>" >
    <br>
    <label>Email: </label>
    <input type="text" name="email" value="<?= $user->email ?>" >
    <br>
    <label>Phone number: </label>
    <input type="text" name="phonenumber" value="<?= $user->phonenumber ?>" >
    <br>
    <label>Birthday: </label>
    <input type="date" name="date_birthday" value="<?= $user->birthday ?>" >
    <br>
    <label>Hobby: </label>
    <select name="hobby" >
        <?php foreach($hobbys as $key => $item): ?>
            <option name="<?= $key?>" ><?= $item ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" name="btn_update" value="Update">
</form>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'index'))); ?>"> Home </a>
<br>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'create'))); ?>"> Create </a>